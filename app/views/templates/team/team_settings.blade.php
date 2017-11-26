<div id="teamSettings" class="modal fade" role="dialog">
    <div class=" modal-dialog modal-lg ">

        <!-- Modal content-->
        <div class="modal-content">
            <form id="">
                <div class="modal-header-info modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title custom-modal-header-font">Team Preferences</h4>
                </div>
                <div class="modal-body teamSettingsCustomHeight">
                    <blockquote  class="m-b-25">
                        <p class="customTeamSettingsFont"> You can change or assign a team  head to a team.<br/>
                            Assigning a user as team head or updating team head will grant all privileges to that user.You will no longer be able to have control on that team,but you can always come back here and change the team head and assign it to you to get back the privileges.
                            <a>Click here to know more about privileges</a>  </p>
                    </blockquote>
                    <center><span><strong id="teamHeadName"></strong> &nbsp;is currently the  team head of <strong id="teamHeadInfo"></strong>.</span></center><br/>
                    <div class="row">
                        <div class="col-sm-6 m-b-15">
                             <div class="input-group fg-float">
                                <span class="input-group-addon"><i class="zmdi zmdi- collection-bookmark"></i></span>
                                <div class="fg-line">

                                    <input id="settingsTeamName" class='form-control modalInputCustomHeight'   type='text' placeholder="Enter team name"  />
                                    <label class="fg-label" >Team name</label>
                                </div>
                            </div>  
                        </div>

                        <div class="col-sm-2 m-b-15">

                            <input type="button" onclick=' updateTeamName()' style="margin-top:13px" value="UPDATE" class="btn btn-primary" />
                        </div>
                        <div class="col-sm-4 m-b-15 additionalMargin">

                            <span id="settingsNameSuccess"></span>
                            <span id="settingsNameError"></span>
                        </div>



                    </div> 
                    <div class="row">
                        <div id="teamUsers" class="col-sm-6 m-b-15">
                            <select id="teamSettingsUsers"   class="chosen" data-placeholder="Select user..">
                                
                            </select>
                        </div>

                        <div class="col-sm-2 m-b-15">

                             <input type="button" onclick=' assignTeamHead()' style="margin-top:13px" value="ASSIGN" class="btn btn-primary" />
                        </div>
                        <div class="col-sm-4 m-b-15 additionalMargin">
                            <span id="settingsHeadSuccess"></span>
                            <span id="settingsHeadError"></span>
                        </div>



                    </div> 
                    
                     <div class="row">
                        <div id="teamUsers" class="col-sm-1 m-b-15">
                            <i style="font-size:36px;color:#ff0000" class="zmdi zmdi-alert-triangle"></i>
                           
                        </div>
                         <div style='color:#ff0000' id="teamUsers" class="col-sm-5 m-b-15">
                           
                            Delete team and its members data.This action is irreversible.
                        </div>
                        <div class="col-sm-3 m-b-15">
                            <input type="button" onclick=' deleteTeam()' style="margin-top:13px" value="DELETE" class="btn btn-primary" />
                        </div>




                    </div> 
                    <!--<p id='customCreateProjectMessage' class='text-center'></p>-->
                </div>
                <div class="modal-footer">

                    <button onclick="closeSettings()" type="button" class="btn btn-default waves-effect" >CLOSE</button>
                </div>
            </form>
        </div>

    </div>
</div>

<script>
    $('.chosen').chosen({
                width: '100%',
                allow_single_deselect: true
        });
$('body').on('focus', '.fg-line .form-control', function(){
            $(this).closest('.fg-line').addClass('fg-toggled');
        })

        $('body').on('blur', '.form-control', function(){
            var p = $(this).closest('.form-group, .input-group');
            var i = p.find('.form-control').val();

            if (p.hasClass('fg-float')) {
                if (i.length == 0) {
                    $(this).closest('.fg-line').removeClass('fg-toggled');
                }
            }
            else {
                $(this).closest('.fg-line').removeClass('fg-toggled');
            }
        });
</script>

<Style>


</style>