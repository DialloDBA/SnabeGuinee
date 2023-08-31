<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
        <meta name="description" content="Smarthr - Bootstrap Admin Template" />
        <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects" />
        <meta name="author" content="Dreamguys - Bootstrap Admin Template" />
        <meta name="robots" content="noindex, nofollow" />
        <title>Dashboard - HRMS admin template</title>

        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}" />

        <link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/material.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}" />
        
		<link rel="stylesheet" href="{{asset('assets/plugins/summernote/dist/summernote-bs4.css')}}">
        @yield('css')
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.min.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left">
                    <a href="index.html" class="logo">
                        <img src="{{asset('assets/img/logo-2.png')}}"  height="50" alt="" />
                    </a>
                </div>

                <a id="toggle_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>

                <div class="page-title-box">
                    <h3 class="text-uppercase">{{'SNABE GUINÉE'}}</h3>
                </div>

                <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

                <ul class="nav user-menu">
                    <li class="nav-item">
                        <div class="top-nav-search">
                            <a href="javascript:void(0);" class="responsive-search">
                                <i class="fa fa-search"></i>
                            </a>
                            <form action="search.html">
                                <input class="form-control" type="text" placeholder="Search here" />
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </li>

                    <li class="nav-item dropdown has-arrow flag-nav">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"> <img src="{{asset('assets/img/flags/fr.png')}}" alt="" height="20" /> <span>English</span> </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item"> <img src="{{asset('assets/img/flags/fr.png')}}" alt="" height="16" /> French </a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span> </a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications</span>
                                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt="" src="{{asset('assets/img/profiles/avatar-02.jpg')}}" />
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                                    <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt="" src="'{{asset('assets/img/profiles/avatar-03.jpg')}}" />
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                                                    <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt="" src="{{asset('assets/img/profiles/avatar-06.jpg')}}" />
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project
                                                        <span class="noti-title">Doctor available module</span>
                                                    </p>
                                                    <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt="" src="{{asset('assets/img/profiles/avatar-17.jpg')}}" />
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                                                    <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt="" src="{{asset('assets/img/profiles/avatar-13.jpg')}}" />
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                                                    <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="activities.html">View all Notifications</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span> </a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Messages</span>
                                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="chat.html">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar">
                                                        <img alt="" src="{{asset('assets/img/profiles/avatar-09.jpg')}}" />
                                                    </span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author">Richard Miles </span>
                                                    <span class="message-time">12:28 AM</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="chat.html">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar">
                                                        <img alt="" src="{{asset('assets/img/profiles/avatar-02.jpg')}}" />
                                                    </span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author">John Doe</span>
                                                    <span class="message-time">6 Mar</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="chat.html">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar">
                                                        <img alt="" src="{{asset('assets/img/profiles/avatar-03.jpg')}}" />
                                                    </span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author"> Tarah Shropshire </span>
                                                    <span class="message-time">5 Mar</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="chat.html">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar">
                                                        <img alt="" src="{{asset('assets/img/profiles/avatar-05.jpg')}}" />
                                                    </span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author">Mike Litorus</span>
                                                    <span class="message-time">3 Mar</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="chat.html">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar">
                                                        <img alt="" src="{{asset('assets/img/profiles/avatar-08.jpg')}}" />
                                                    </span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author"> Catherine Manseau </span>
                                                    <span class="message-time">27 Feb</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="chat.html">View all Messages</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown has-arrow main-drop">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <span class="user-img"><img src="{{asset('assets/img/profiles/avatar-21.jpg')}}" alt="" /> <span class="status online"></span></span>
                            <span>{{ auth()->user()->username }}</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('admin.home')}}">My Profile</a>
                            <a class="dropdown-item" href="{{route('admin.home')}}">Settings</a>
                            <a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit();" >Déconnexion</a>
                            <form action="{{ route('logout')}}" method="post" id="logout-form">
                                @csrf
                                @method("POST")
                            </form>
                        </div>
                    </li>
                </ul>

                <div class="dropdown mobile-user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </div>
            </div>


            {{-- Les Modals Globals --}}
            <div id="singleMailModal" class="modal custom-modal fade " role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">En</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            <form id="singleMailModalFrom">
                                <div class="form-group">
                                    <input type="email" id="mail-to" value="" placeholder="À" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="mail-cc" placeholder="Cc" class="form-control">
                                            <small class="text-error text-danger copie-text-error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="mail-bcc" placeholder="Bcc" class="form-control">
                                            <small class="text-error text-danger brouillon-text-error"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="mail-sujet" placeholder="Sujet..." class="form-control">
                                    <small class="text-error text-danger sujet-text-error"></small>
                                </div>
                                <div class="form-group">
                                    <textarea rows="4" id="mail-message" class="form-control" placeholder="Ecrire le Contenu du Message ..."></textarea>
                                    <small class="text-error text-danger message-text-error"></small>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary send-mail" onclick="envoyerSMS(event);">
                                            <span>Envoyez</span> <i class="fa fa-send m-l-5"></i>
                                        </button>
                                        <button class="btn btn-success m-l-5 draft-sms" type="button"><span>Brouillon</span> <i class="fa fa-floppy-o m-l-5"></i></button>
                                        <button class="btn btn-success m-l-5 " type="button"><span>Annuler</span> <i class="fa fa-trash-o m-l-5"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="singleMessageModal" class="modal custom-modal fade " role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="singleMessageModalFrom">
                                <div class="form-group">
                                    <input type="email" id="sms-to" value="" placeholder="À" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="sms-cc" placeholder="Cc" class="form-control">
                                            <small class="text-error text-danger copie-text-error"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="sms-bcc" placeholder="Bcc" class="form-control">
                                            <small class="text-error text-danger brouillon-text-error"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="sms-sujet" placeholder="Sujet..." class="form-control">
                                    <small class="text-error text-danger sujet-text-error"></small>
                                </div>
                                <div class="form-group">
                                    <textarea rows="4" id="sms-message" class="form-control" placeholder="Ecrire le Contenu du Message ..."></textarea>
                                    <small class="text-error text-danger message-text-error"></small>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary send-sms" onclick="envoyerSMS(event);">
                                            <span>Envoyez</span> <i class="fa fa-send m-l-5"></i>
                                        </button>
                                        <button class="btn btn-success m-l-5 draft-sms" type="button"><span>Brouillon</span> <i class="fa fa-floppy-o m-l-5"></i></button>
                                        <button class="btn btn-success m-l-5 " type="button"><span>Annuler</span> <i class="fa fa-trash-o m-l-5"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            @include('inc.aa.side')

            <div class="page-wrapper">
                @yield('content')
            </div>
        </div>

        @yield('js')
        
		<script src="{{asset('assets/plugins/summernote/dist/summernote-bs4.min.js')}}"></script>
        <script>
            function SimpleSMS(e,from="",to="",sujet="",message="",titre="",readOnly=false){
                e.preventDefault();
                if ($("#singleMessageModal").modal('show')){
                    $("#singleMessageModal").find(".modal-title").text((titre!="") ? titre : "Envoi d'un Nouveau Message");
                    if(Boolean(readOnly)==true){
                        $("#singleMessageModalFrom").find('input').attr("readonly",true);
                    }
                    $("#singleMessageModal").find("#sms-from").val(from);
                    $("#singleMessageModal").find("#sms-to").val(to);
                    $("#singleMessageModal").find("#sms-cc").val(from);
                    $("#singleMessageModal").find("#sms-bcc").val(from);
                    $("#singleMessageModal").find("#sms-sujet").val(sujet);
                    console.log(from +" " + to +" " + sujet +" "+ message );
                }
                
            }
            function envoyerSMS(event){
                event.preventDefault();
                from = $("#singleMessageModal").find("#sms-from").val();
                to = $("#singleMessageModal").find("#sms-to").val();
                cc = $("#singleMessageModal").find("#sms-cc").val();
                bcc = $("#singleMessageModal").find("#sms-cc").val();
                sujet = $("#singleMessageModal").find("#sms-sujet").val();
                message = $("#singleMessageModal").find("#sms-message").val();
                if(from && to && sujet && message){
                    alert("succès.");
                }else{
                    alert('error');
                }
            }

            
            $("form").submit(function(e){
            $("form.admin button[type=submit]").html('<div class="spinner-border spinner-border-sm" role="status"><span></span></div> Veuillez Patientez ...');
        });
        </script>
    </body>
</html>
