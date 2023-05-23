<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MEN-TIZNIT| Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.1/viewer.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.1/viewer.min.js"></script>

    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
    <style>
        #chat-messages {
    height:60vh;
    overflow-y: scroll;
    overflow-x: hidden;
    padding-right: 20px;
    -webkit-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
    -moz-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
    -ms-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
    -o-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
    transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
}
#chat-messages label{
    color:#aab8c2;
    font-weight:600;
    font-size:12px;
    text-align:center;
    margin:15px 0;
    display:block;
}
#chat-messages div.message{
    padding: 0 0 30px 58px;
    clear: both;
    margin-bottom: 40px;
}
#chat-messages div.message.right{
    padding: 0 58px 30px 0;
    margin-right: -19px;
    margin-left: 19px;
}
#chat-messages .message img{
    float: left;
    margin-left: -38px;
    border-radius: 50%;
    width: 30px;
    margin-top: 12px;
}
#chat-messages div.message.right img{
    float: right;
    margin-left: 0;
    margin-right: -38px;
}
.message {
    background-color: unset;
}
.message .bubble{
    background:#f0f4f7;
    font-size:13px;
    font-weight:600;
    padding:12px 13px;
    border-radius:5px 5px 5px 0px;
    color:#8495a3;
    position:relative;
    float:left;
}
#chat-messages div.message.right .bubble{
    float:right;
    border-radius:5px 5px 0px 5px ;
}
.bubble .corner{
    background:url("/images/bubble-corner.png") 0 0 no-repeat;
    position:absolute;
    width:7px;
    height:7px;
    left:-5px;
    bottom:0;
}
div.message.right .corner{
    background:url("/images/bubble-cornerR.png") 0 0 no-repeat;
    left:auto;
    right:-5px;
}
.bubble span{
    color: #aab8c2;
    font-size: 11px;
    position: absolute;
    right: 0;
    bottom: -22px;
    width: 80px;
}
#sendmessage{
    height: 60px;
    border-top: 1px solid #e7ebee;
    background: #fff;
}
#sendmessage input{
    background:#fff;
    border:none;
    padding:21px;
    font-size:14px;
    font-family:"Open Sans", sans-serif;
    font-weight:400;
    color:#aab8c2;
}
#sendmessage input:focus{
    outline: 0;
}
#sendmessage button{
    background: #fff url(/images/send.png) 0 -41px no-repeat;
    width: 30px;
    height: 30px;
    border: none;
}
#sendmessage button:hover{
    cursor:pointer;
    background-position: 0 0 ;
}
#sendmessage button:focus{
    outline: 0;
}

#chatview, #sendmessage {
    overflow:hidden;
    border-radius:6px;
}

          
        @import url(https://fonts.googleapis.com/earlyaccess/amiri.css);
    @import url(https://fonts.googleapis.com/earlyaccess/scheherazade.css);
      * {
        box-sizing: border-box;
    }
    label:not(.form-check-label):not(.custom-file-label) {
    font-weight: 700;
    font-size:19px;
}

    html {
        background-color: #ffffff;

        font-weight:100px;

    }

    #regForm {
        background-color: #ffffff;
        margin: 20px auto;
        font-family: Arial, Helvetica, sans-serif;
        padding: 40px;
        width: 70%;
        min-width: 300px;
        font-weight:100px;

    }
    canvas#myChart2 {
  width: 400px;
  height: 200px;
}

canvas#myChart3 {
  width: 200px;
  height: 100px;
}
    h1 {
        text-align: center;
        font-weight:100px;

    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
        font-weight:100px;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

   
      
    </style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
