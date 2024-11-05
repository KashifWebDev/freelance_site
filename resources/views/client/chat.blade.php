@extends('theme-layout.landing-layout')

@section('content')

    <div class="chat-ui">
        <div class="chat-ui__sidebar">
            <div class="chat-ui__user-list">
                <div class="chat-ui__user-item chat-ui__user-item--active">
                    <img src="{{ route('index') }}/landing/images/member-icon-3.png" alt="Alice Johnson" class="chat-ui__user-avatar">
                    <div class="chat-ui__user-info">
                        <div class="chat-ui__user-name">Alice Johnson</div>
                        <div class="chat-ui__user-status">Online</div>
                    </div>
                </div>
                <div class="chat-ui__user-item">
                    <img src="{{ route('index') }}/landing/images/member-icon-3.png" alt="Bob Smith" class="chat-ui__user-avatar">
                    <div class="chat-ui__user-info">
                        <div class="chat-ui__user-name">Bob Smith</div>
                        <div class="chat-ui__user-status">Offline</div>
                    </div>
                </div>
                <div class="chat-ui__user-item">
                    <img src="{{ route('index') }}/landing/images/member-icon-3.png" alt="Charlie Brown" class="chat-ui__user-avatar">
                    <div class="chat-ui__user-info">
                        <div class="chat-ui__user-name">Charlie Brown</div>
                        <div class="chat-ui__user-status">Away</div>
                    </div>
                </div>
                <div class="chat-ui__user-item">
                    <img src="{{ route('index') }}/landing/images/member-icon-3.png" alt="Diana Prince" class="chat-ui__user-avatar">
                    <div class="chat-ui__user-info">
                        <div class="chat-ui__user-name">Diana Prince</div>
                        <div class="chat-ui__user-status">Online</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="chat-ui__main">
            <div class="chat-ui__header">
                <img src="{{ route('index') }}/landing/images/member-icon-3.png" alt="Alice Johnson" class="chat-ui__user-avatar">
                <div class="chat-ui__user-info">
                    <div class="chat-ui__user-name">Alice Johnson</div>
                    <div class="chat-ui__user-status">Online</div>
                </div>
            </div>
            <div class="chat-ui__message-list">
                <div class="chat-ui__message chat-ui__message--received">
                    <div class="chat-ui__message-content">Hey everyone!</div>
                    <div class="chat-ui__message-time">10:00 AM</div>
                </div>
                <div class="chat-ui__message chat-ui__message--sent">
                    <div class="chat-ui__message-content">Hi Alice, how are you?</div>
                    <div class="chat-ui__message-time">10:02 AM</div>
                </div>
                <div class="chat-ui__message chat-ui__message--received">
                    <div class="chat-ui__message-content">I'm doing great, thanks for asking!</div>
                    <div class="chat-ui__message-time">10:05 AM</div>
                </div>
                <div class="chat-ui__message chat-ui__message--sent">
                    <div class="chat-ui__message-content">That's wonderful to hear!</div>
                    <div class="chat-ui__message-time">10:06 AM</div>
                </div>
            </div>
            <div class="chat-ui__input-area">
                <input type="text" class="chat-ui__input" placeholder="Type a message...">
                <button class="chat-ui__send-button">Send</button>
            </div>
        </div>
    </div>

    <style>
        .chat-ui {
            display: flex;
            height: 100vh;
            font-family: 'Arial', sans-serif;
            color: #0e1218;
            background-color: #0e1218;
        }
        .chat-ui__sidebar {
            width: 300px;
            background-color: #0e1218;
            border-right: 1px solid #0084ff;
        }
        .chat-ui__user-list {
            overflow-y: auto;
            height: 100%;
        }
        .chat-ui__user-item {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #686868;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .chat-ui__user-item:hover,
        .chat-ui__user-item--active {
            background-color: #0084ff;
        }
        .chat-ui__user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 15px;
        }
        .chat-ui__user-info {
            flex-grow: 1;
        }
        .chat-ui__user-name {
            font-weight: bold;
            margin-bottom: 3px;
            color: white;
        }
        .chat-ui__user-status {
            font-size: 0.8em;
            color: white;
        }
        .chat-ui__main {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .chat-ui__header {
            display: flex;
            align-items: center;
            padding: 15px;
            background-color: #0084ff;
            border-bottom: 1px solid #e0e0e0;
        }
        .chat-ui__message-list {
            flex-grow: 1;
            overflow-y: auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }
        .chat-ui__message {
            max-width: 70%;
            margin-bottom: 15px;
            padding: 10px 15px;
            border-radius: 18px;
            line-height: 1.4;
        }
        .chat-ui__message--sent {
            align-self: flex-end;
            background-color: #0084ff;
            color: #fff;
        }
        .chat-ui__message--received {
            align-self: flex-start;
            background-color: #e5e5ea;
        }
        .chat-ui__message-time {
            font-size: 0.75em;
            margin-top: 5px;
            opacity: 0.7;
        }
        .chat-ui__input-area {
            display: flex;
            padding: 15px;
            background-color: #fff;
            border-top: 1px solid #e0e0e0;
        }
        .chat-ui__input {
            flex-grow: 1;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 20px;
            font-size: 14px;
        }
        .chat-ui__send-button {
            padding: 10px 20px;
            background-color: #0084ff;
            color: white;
            border: none;
            border-radius: 20px;
            margin-left: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .chat-ui__send-button:hover {
            background-color: #0073e6;
        }
    </style>

@endsection
