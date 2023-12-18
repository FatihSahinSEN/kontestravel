<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, Roboto, "Open Sans", "Helvetica Neue", sans-serif;
        }
        .whatsapp-chat-container {
            box-shadow: rgb(0 0 0 / 10%) 0px 12px 24px 0px;
            display: flex;
            flex-direction: column;
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
            transition: opacity 0.3s ease 0s, margin 0.3s ease 0s, visibility 0.3s ease 0s;
            background-color: rgb(255, 255, 255);
            transform: translate3d(0px, 0px, 0px);
            opacity: 1;
            pointer-events: all;
            visibility: visible;
            touch-action: auto;
            margin-bottom: 96px;
            position: fixed;
            bottom: 0px;
            right: 0px;
            left: auto;
            margin-right: 20px;
        }
        .whatsapp-close-btn {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 20px;
            height: 20px;
            opacity: 0.4;
            cursor: pointer;
            transition: all 0.3s ease 0s;
            outline: transparent;
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
        }
        .eapp-whatsapp-chat-root-layout-component, .eapp-whatsapp-chat-root-layout-component * {
            box-sizing: border-box !important;
            outline: none !important;
        }
        .whatsapp-chat-header {
            background: rgb(9, 94, 84);
            color: rgb(17, 17, 17);
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            padding: 24px 20px;
        }
        .whatsapp-chat-area {
            padding: 20px 20px 20px 10px;
            background-color: rgb(230, 221, 212);
            position: relative;
            overflow: auto;
            max-height: 382px;
        }
        .whatsapp-chat-area::before {
            display: block;
            position: absolute;
            content: "";
            left: 0px;
            top: 0px;
            height: 100%;
            width: 100%;
            z-index: 0;
            opacity: 0.08;
            background-image: url(https://elfsight.com/assets/chats/patterns/whatsapp.png);
        }
        .whatsapp-chat-message {
            display: flex;
            z-index: 1;
        }
        .whatsapp-chat-message-position {
            background-color: rgb(255, 255, 255);
            width: 52.5px;
            height: 32px;
            border-radius: 16px;
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            margin-left: 10px;
            opacity: 0;
            transition: all 0.1s ease 0s;
            z-index: 1;
            box-shadow: rgb(0 0 0 / 13%) 0px 1px 0.5px;
        }
        .dXRaya {
            position: relative;
            display: flex;
        }
        .dSqAiX {
            background-color: rgb(158, 157, 162);
            animation-name: dJHihm;
        }
        .iegLYI {
            height: 5px;
            width: 5px;
            margin: 0px 2px;
            background-color: rgb(182, 181, 186);
            border-radius: 50%;
            display: inline-block;
            position: relative;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            top: 0px;
        }
        .btwOSU {
            animation-name: goHzKU;
        }
        .dkFERE {
            animation-name: krEmjx;
        }
        .eapp-whatsapp-chat-root-layout-component a {
            text-decoration: none;
        }
        .whatsapp-chat-btn-container {
            padding: 8px 12px;
            border-radius: 24px;
            border: none;
            background: rgb(20, 198, 86);
            color: rgb(255, 255, 255);
            font-size: 15px;
            font-weight: 700;
            line-height: 20px;
            cursor: pointer;
            position: relative;
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            margin: 20px;
            overflow: hidden;
            appearance: none;
            text-decoration: none;
        }
        .whatsapp-chat-btn-svg {
            margin-right: 5px;
        }
        .whatsapp-btn {
            height: 64px;
            box-shadow: rgb(0 0 0 / 15%) 0px 3px 12px;
            border-radius: 50%;
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            cursor: pointer;
            user-select: none;
            position: relative;
            outline: transparent;
            background-color: rgb(255, 255, 255);
            margin-bottom: 20px;
            margin-right: 20px;
            margin-left: 20px;
            width: 64px;
        }
        .whatsapp-close-btn::before {
            transform: rotate(
                45deg);
        }
        .whatsapp-close-btn::after {
            transform: rotate(
                -45deg);
        }
        .whatsapp-close-btn::before, .whatsapp-close-btn::after {
            content: "";
            position: absolute;
            width: 12px;
            height: 2px;
            background-color: rgb(255, 255, 255);
            display: block;
            border-radius: 2px;
        }
        .whatsapp-user {
            width: 52px;
            height: 52px;
            display: block;
            position: relative;
            flex-shrink: 0;
        }
        .whatsapp-user::before {
            content: "";
            bottom: 0px;
            right: 0px;
            width: 12px;
            height: 12px;
            box-sizing: border-box;
            background-color: rgb(74, 213, 4);
            display: block;
            position: absolute;
            z-index: 1;
            border-radius: 50%;
            border: 2px solid rgb(9, 94, 84);
        }
        .whatsapp-user-infos {
            margin-left: 16px;
            margin-right: 16px;
        }
        .whatsapp-user-name {
            font-size: 16px;
            font-weight: 700;
            line-height: 20px;
            color: rgb(255, 255, 255);
        }
        .whatsapp-user-status {
            font-size: 13px;
            line-height: 18px;
            margin-top: 4px;
            color: rgb(255, 255, 255);
        }

        .whatsapp-user-message {
            padding: 7px 14px 6px;
            background-color: rgb(255, 255, 255);
            border-radius: 0px 8px 8px;
            position: relative;
            transition: all 0.3s ease 0s;
            opacity: 0;
            transform-origin: center top;
            z-index: 2;
            box-shadow: rgb(0 0 0 / 13%) 0px 1px 0.5px;
            margin-top: 4px;
            margin-left: -54px;
            max-width: calc(100% - 66px);
        }
        .whatsapp-user-message::before {
            position: absolute;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAmCAMAAADp2asXAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAACQUExURUxpccPDw9ra2m9vbwAAAAAAADExMf///wAAABoaGk9PT7q6uqurqwsLCycnJz4+PtDQ0JycnIyMjPf3915eXvz8/E9PT/39/RMTE4CAgAAAAJqamv////////r6+u/v7yUlJeXl5f///5ycnOXl5XNzc/Hx8f///xUVFf///+zs7P///+bm5gAAAM7Ozv///2fVensAAAAvdFJOUwCow1cBCCnqAhNAnY0WIDW2f2/hSeo99g1lBYT87vDXG8/6d8oL4sgM5szrkgl660OiZwAAAHRJREFUKM/ty7cSggAABNFVUQFzwizmjPz/39k4YuFWtm55bw7eHR6ny63+alnswT3/rIDzUSC7CrAziPYCJCsB+gbVkgDtVIDh+DsE9OTBpCtAbSBAZSEQNgWIygJ0RgJMDWYNAdYbAeKtAHODlkHIv997AkLqIVOXVU84AAAAAElFTkSuQmCC);
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-size: contain;
            content: "";
            top: 0px;
            left: -12px;
            width: 12px;
            height: 19px;
        }
        .whatsapp-user-message-name {
            font-size: 13px;
            font-weight: 700;
            line-height: 18px;
            color: rgba(0, 0, 0, 0.4);
        }
        .whatsapp-user-message-say {
            font-size: 14px;
            line-height: 19px;
            margin-top: 4px;
            color: rgb(17, 17, 17);
        }
        .whatsapp-user-message-time {
            text-align: right;
            margin-top: 4px;
            font-size: 12px;
            line-height: 16px;
            color: rgba(17, 17, 17, 0.5);
            margin-right: -8px;
            margin-bottom: -4px;
        }
        .whatsapp-btn {
            height: 64px;
            box-shadow: rgb(0 0 0 / 15%) 0px 3px 12px;
            border-radius: 50%;
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            cursor: pointer;
            user-select: none;
            position: relative;
            outline: transparent;
            background-color: rgb(255, 255, 255);
            margin-bottom: 20px;
            margin-right: 20px;
            margin-left: 20px;
            width: 64px;
        }
         .whatsapp-btn::before, .whatsapp-btn::after {
             content: "";
             position: absolute;
             border: 1px solid rgb(79, 206, 93);
             inset: -2px;
             border-radius: 500px;
             opacity: 0;
             z-index: 0;
         }
        .whatsapp-btn-bubble {
            width: 10px;
            height: 10px;
            background-color: rgb(255, 0, 0);
            display: block;
            position: absolute;
            z-index: 1;
            border-radius: 50%;
            right: 4px;
            top: 4px;
        }
        .flex {
            display: flex;
        }
        .whatsapp-btn-img svg {
            height: 32px;
            width: 32px;
            position: static !important;
            fill: rgb(79, 206, 93) !important;
        }
        .whatsapp-btn-color {
            display: block;
            color: rgb(79, 206, 93);
        }
        .whatsapp {
            position: absolute;
            right: 20px;
            bottom: 0;
        }
    </style>
</head>
<body>
<div class="whatsapp">
    <div role="button" class="whatsapp-btn" onclick="javascript:OpenChat()">
        <div class="whatsapp-btn-bubble" id="whatsapp-notification"></div>
        <div class="whatsapp-btn-img flex" color="rgb(79, 206, 93)" height="32" width="32">
            <svg viewBox="0 0 90 90" fill="#4FCE5D"><path d="M90,43.841c0,24.213-19.779,43.841-44.182,43.841c-7.747,0-15.025-1.98-21.357-5.455L0,90l7.975-23.522   c-4.023-6.606-6.34-14.354-6.34-22.637C1.635,19.628,21.416,0,45.818,0C70.223,0,90,19.628,90,43.841z M45.818,6.982   c-20.484,0-37.146,16.535-37.146,36.859c0,8.065,2.629,15.534,7.076,21.61L11.107,79.14l14.275-4.537   c5.865,3.851,12.891,6.097,20.437,6.097c20.481,0,37.146-16.533,37.146-36.857S66.301,6.982,45.818,6.982z M68.129,53.938   c-0.273-0.447-0.994-0.717-2.076-1.254c-1.084-0.537-6.41-3.138-7.4-3.495c-0.993-0.358-1.717-0.538-2.438,0.537   c-0.721,1.076-2.797,3.495-3.43,4.212c-0.632,0.719-1.263,0.809-2.347,0.271c-1.082-0.537-4.571-1.673-8.708-5.333   c-3.219-2.848-5.393-6.364-6.025-7.441c-0.631-1.075-0.066-1.656,0.475-2.191c0.488-0.482,1.084-1.255,1.625-1.882   c0.543-0.628,0.723-1.075,1.082-1.793c0.363-0.717,0.182-1.344-0.09-1.883c-0.27-0.537-2.438-5.825-3.34-7.977   c-0.902-2.15-1.803-1.792-2.436-1.792c-0.631,0-1.354-0.09-2.076-0.09c-0.722,0-1.896,0.269-2.889,1.344   c-0.992,1.076-3.789,3.676-3.789,8.963c0,5.288,3.879,10.397,4.422,11.113c0.541,0.716,7.49,11.92,18.5,16.223   C58.2,65.771,58.2,64.336,60.186,64.156c1.984-0.179,6.406-2.599,7.312-5.107C68.398,56.537,68.398,54.386,68.129,53.938z"></path></svg>
        </div>
        <div class="whatsapp-btn-color"></div>
    </div>
</div>
<div class="whatsapp-chat-container" id="WhatsAppChat" style="width: 360px; opacity: 0">
    <div color="rgb(255, 255, 255)" role="button" tabindex="0" class="whatsapp-close-btn" onclick="javascript:CloseChat();"></div>
    <div class="whatsapp-chat-header">
        <div size="52" class="whatsapp-user">
            <div class="whatsapp-user-element">
                <div class="whatsapp-user-element-img">
                    <img src="assets/images/wp-logo.png" height="55">
                </div>
            </div>
        </div>
        <div class="whatsapp-user-infos">
            <div class="whatsapp-user-name">Mexico Turquia Tours</div>
            <div class="whatsapp-user-status">Responde durante el horario comercial.</div>
        </div>
    </div>
    <div pattern="assets/images/temp/whatsapp.png" class="whatsapp-chat-area">
        <div class="whatsapp-chat-message">
            <div class="whatsapp-chat-message-position" style="opacity: 0;"></div>
            <div class="whatsapp-user-message" style="opacity: 1;">
                <div class="whatsapp-user-message-name">Mexico Turquia Tours</div>
                <div class="whatsapp-user-message-say">Hola 👋<br><br>No dudes en consultarnos.</div>
                <div class="whatsapp-user-message-time">18:48</div>
            </div>
        </div>
    </div>
    <a href="https://wa.link/p6lmh3" title="WhatsApp" class="whatsapp-chat-btn-container" target="_blank">
        <svg width="20" height="20" viewBox="0 0 90 90" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" fill-rule="evenodd" clip-rule="evenodd" class="whatsapp-chat-btn-svg"><path d="M90,43.841c0,24.213-19.779,43.841-44.182,43.841c-7.747,0-15.025-1.98-21.357-5.455L0,90l7.975-23.522   c-4.023-6.606-6.34-14.354-6.34-22.637C1.635,19.628,21.416,0,45.818,0C70.223,0,90,19.628,90,43.841z M45.818,6.982   c-20.484,0-37.146,16.535-37.146,36.859c0,8.065,2.629,15.534,7.076,21.61L11.107,79.14l14.275-4.537   c5.865,3.851,12.891,6.097,20.437,6.097c20.481,0,37.146-16.533,37.146-36.857S66.301,6.982,45.818,6.982z M68.129,53.938   c-0.273-0.447-0.994-0.717-2.076-1.254c-1.084-0.537-6.41-3.138-7.4-3.495c-0.993-0.358-1.717-0.538-2.438,0.537   c-0.721,1.076-2.797,3.495-3.43,4.212c-0.632,0.719-1.263,0.809-2.347,0.271c-1.082-0.537-4.571-1.673-8.708-5.333   c-3.219-2.848-5.393-6.364-6.025-7.441c-0.631-1.075-0.066-1.656,0.475-2.191c0.488-0.482,1.084-1.255,1.625-1.882   c0.543-0.628,0.723-1.075,1.082-1.793c0.363-0.717,0.182-1.344-0.09-1.883c-0.27-0.537-2.438-5.825-3.34-7.977   c-0.902-2.15-1.803-1.792-2.436-1.792c-0.631,0-1.354-0.09-2.076-0.09c-0.722,0-1.896,0.269-2.889,1.344   c-0.992,1.076-3.789,3.676-3.789,8.963c0,5.288,3.879,10.397,4.422,11.113c0.541,0.716,7.49,11.92,18.5,16.223   C58.2,65.771,58.2,64.336,60.186,64.156c1.984-0.179,6.406-2.599,7.312-5.107C68.398,56.537,68.398,54.386,68.129,53.938z"></path></svg>
        <span class="whatsapp-chat-btn-text">Comenzar Chat</span>
    </a>
</div>

<script>
    let WhatsAppChat = document.getElementById("WhatsAppChat");
    let Notification = document.getElementById("whatsapp-notification");
    function OpenChat() {
        WhatsAppChat.style.opacity = "1";
        WhatsAppChat.style.zIndex = "9999";
        Notification.style.display = "none"

    }
    function CloseChat() {
        WhatsAppChat.style.opacity = "0";
        WhatsAppChat.style.zIndex = "-1";
    }
</script>
</body>
</html>
