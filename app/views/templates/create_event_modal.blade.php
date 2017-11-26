<style type="text/css">
    .h4, .h5, .h6, h4, h5, h6 {
        margin-top: -9px !important;
        margin-bottom: 10px;
    } 
    .modal-footer {
        padding: 15px;
        text-align: center !important;
        border-top: 1px solid #E5E5E5;
    }
    .tabContent{
        background-color: #E8E8E8;
        min-height:545px !important;
        margin-left: -30px !important;
        margin-top: -16px !important;
    }
    * { font-family:Arial; }
    h2 { padding:0 0 5px 5px; }
    h2 a { color: #224f99; }
    a { color:#999; text-decoration: none; }
    a:hover { color:#802727; }
    p { padding:0 0 5px 0; }

    input { padding:5px; border:1px solid #999; border-radius:4px; -moz-border-radius:4px; -web-kit-border-radius:4px; -khtml-border-radius:4px; }
    .attendeeInput{
        margin-left: -15px;
    }
    .nav > li > a:focus, .nav > li > a:hover {
    text-decoration: none;
    color: #555 !important;
}
    .nav-tabs > li > a {
    margin-right: 2px;
    line-height: 1.42857;
    border: 1px solid transparent;
    border-radius: 4px 4px 0px 0px;
    color: #909090 !important;
    font-size: 20px;
}
.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
    color: rgb(85, 85, 85) !important;
    cursor: default;
    background-color: transparent !important;
    border-width: 0px important;
    border-style: transparent important;
    border-color: transparent important;
    -moz-border-top-colors: none;
    -moz-border-right-colors: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    border-image: none important;
    color: #000 !important;
}
.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
    color: #555;
    border-width: 0px;
    border-style: none;
    border-color: transparent;
    -moz-border-top-colors: none;
    -moz-border-right-colors: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    border-image: none;
}
</style>
<script src="{{asset('fusionmate/public/plugins/js/jquery-1.11.1.min.js') }}"></script>
<script>
$(document).ready(function () {
    var scntDiv = $('#p_scents');
    var i = $('#p_scents p').size() + 1;

    $('#addScnt').on('click', function () {
        $('<p class="attendeeInput"><label for="p_scnts"><input  style="width: 300px;" type="text" id="p_scnt"  name="p_scnt_' + i + '" value="" placeholder="New Attendee" /></label> <a href="#" class="remScnt">Remove</a></p>').appendTo(scntDiv);
        i++;
        return false;
    });
    $(document).on('click', '.remScnt', function () {
        if (i > 2) {
            $(this).parents('p').remove();
            i--;
        }
        return false;
    });
});
</script>
<!-- Modal -->
<div id="myModalEvent" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <form role="form" method="POST" action="#">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Start A New Event</h4>
                </div>
                <div class="modal-body" style="margin-bottom: -25px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="col-sm-6 tabContent">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#detail">Detail</a></li>
                                        <li><a data-toggle="tab" href="#attendee">Attendees</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="detail" class="tab-pane fade in active">



                                            <div class="form-group col-sm-6">
                                                <label for="when">When:</label>
                                                <select class="form-control input-sm">
                                                    <option value="volvo">9/09/2015</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="opel">Opel</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="startTime">Start:</label>
                                                <select class="form-control input-sm">
                                                    <option value="volvo">3:30Pm</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="opel">Opel</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label for="time">How Long:</label>
                                                <select class="form-control input-sm">
                                                    <option value="volvo">1 hour</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="opel">Opel</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                                <button type="button" class="btn btn-link">Show time zone</button>
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label for="location">Location:</label>
                                                <input type="location" class="form-control" id="location">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label for="repeatOften">How Often:</label>
                                                <select class="form-control input-sm">
                                                    <option value="volvo">Once</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="opel">Opel</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                            <div class=" col-sm-12">
                                                <label for="remainder">Remainder:</label></div>
                                            <div class="form-group col-sm-6">
                                                <select class="form-control input-sm">
                                                    <option value="volvo">Notify on device</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="opel">Opel</option>
                                                    <option value="audi">Audi</option>
                                                </select>

                                                <button type="button" class="btn btn-link">Add a remainder</button>
                                            </div>
                                            <div class="form-group col-sm-5">
                                                <select class="form-control input-sm">
                                                    <option value="volvo">Start Time</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="opel">Opel</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-1">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label for="status">Status:</label>
                                                <select class="form-control input-sm">
                                                    <option value="volvo">Free</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="opel">Opel</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-12 checkbox">
                                                <label><input type="checkbox" value="">Private</label>
                                            </div>
                                            +
                                        </div>
                                        <div id="attendee" class="tab-pane fade">
                                            <div class="form-group col-sm-12">
                                                <label for="team">Select Team:</label>
                                                <select class="form-control input-sm">
                                                    <option value="volvo">Otsuka</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="opel">Opel</option>
                                                    <option value="audi">Audi</option>
                                                </select>

                                            </div> 
                                            <div class="form-group col-sm-12">
                                                <button type="button" class="btn btn-link" id="addScnt">Add Add Attendee</button>

                                                <div id="p_scents" class="form-group col-sm-12">
                                                    <p class="attendeeInput"> 
                                                        <label for="p_scnts"><input type="text" id="p_scnt" style="width: 300px;" name="p_scnt" value="" placeholder="New Attendee" /></label>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4>Meeting</h4>
                                    <div class="form-group">
                                        <textarea class="form-control" style="border:0 !important" placeholder="Add a description" rows="20" id="comment"></textarea>
                                    </div>
                                </div>
                                    <button type="submit" class="btn btn-default" style="margin-left: 81px;">Save</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                        </div> 
                    </div>
                </div>
                
        </form>
        </div>
    </div>
</div>