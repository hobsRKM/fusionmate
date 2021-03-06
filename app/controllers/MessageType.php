<?php

class MessageType extends \BaseController {

    /**
     * Display a listing of messages.
     *
     * @return Response
     */
    public function index() {
$message='typing';
       $data = array(
            'room'        => Input::get('conversation'),
            'message'  => array( 'body' => Str::words($message, 5), 'user_id' => '')
        );

        Event::fire(ChatMessagesEventHandler::EVENT, array(json_encode($data)));

        return Response::json([
            'success' => true,
            'result' => $message
        ]);
    }

    /**
     * Store a newly created message in storage.
     *
     * @return Response
     */
    public function store() {

        $rules     = array('body' => 'required');
        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()) {
            return Response::json([
                'success' => false,
                'result' => $validator->messages()
            ]);
        }

        $conversation = Conversation::where('name', Input::get('conversation'))->first();

        $params = array(
            'conversation_id' => $conversation->id,
            'body'               => Input::get('body'),
            'user_id'           => Input::get('user_id'),
            'created_at'      => new DateTime
        );

        $message = Message::create($params);

        // Create Message Notifications
        $messages_notifications = array();

        foreach($conversation->users()->get() as $user) {
            array_push($messages_notifications, new MessageNotification(array('user_id' => $user->id, 'conversation_id' => $conversation->id, 'read' => false)));
        }

        $message->messages_notifications()->saveMany($messages_notifications);

        // Publish Data To Redis
        $data = array(
            'room'        => Input::get('conversation'),
            'message'  => array( 'body' => Str::words($message->body, 5), 'user_id' => Input::get('user_id'))
        );

        Event::fire(ChatMessagesEventHandler::EVENT, array(json_encode($data)));

        return Response::json([
            'success' => true,
            'result' => $message
        ]);
    }
}
