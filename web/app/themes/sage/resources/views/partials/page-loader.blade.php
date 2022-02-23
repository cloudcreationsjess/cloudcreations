<style>
    .page-loader {
        position: fixed;
        display: flex;
        flex-direction: row;
        justify-content: center;
        left: 0px;
        top: 0px;
        width: 100vw;
        height: 100vh;
        z-index: 9999;
        background: #E1EFF3;
        color: #333;
        text-align: center;
        padding: 120px 0px 80px 0px;
    }

    .page-loader__sky-scene {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .page-loader__sky-scene__cloud {
        position: absolute;
        animation-name: cloud-drift;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
    }

    .page-loader__sky-scene__cloud.cloud-2 {
        top: {{ random_int(1, 100) }}%;
        left: {{ random_int(1, 100) }}%;
        animation-duration: {{ random_int(5, 20) }}s;
    }

    .page-loader__sky-scene__cloud.cloud-3 {
        top: {{ random_int(1, 100) }}%;
        left: {{ random_int(1, 100) }}%;
        animation-duration: {{ random_int(5, 20) }}s;
    }

    .page-loader__sky-scene__cloud.cloud-4 {
        top: {{ random_int(1, 100) }}%;
        left: {{ random_int(1, 100) }}%;
        animation-duration: {{ random_int(5, 20) }}s;
    }

    .page-loader__sky-scene__cloud.cloud-1 {
        top: {{ random_int(1, 100) }}%;
        left: {{ random_int(1, 100) }}%;
        animation-duration: {{ random_int(5, 20) }}s;
    }

    @keyframes cloud-drift {
        0%,
        100% {
            transform: translateX(-60%);
        }

        50% {
            transform: translateX(60%);
        }
    }

    .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -20px;
        margin-left: -20px;
        text-align: center;

        -webkit-animation: sk-rotate 2.0s infinite linear;
        animation: sk-rotate 2.0s infinite linear;
    }

    .dot1, .dot2 {
        width: 60%;
        height: 60%;
        display: inline-block;
        position: absolute;
        top: 0;
        background-color: #fff;
        border-radius: 100%;

        -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
        animation: sk-bounce 2.0s infinite ease-in-out;
    }

    .dot2 {
        top: auto;
        bottom: 0;
        -webkit-animation-delay: -1.0s;
        animation-delay: -1.0s;
    }

    @-webkit-keyframes sk-rotate { 100% { -webkit-transform: rotate(360deg) }}
    @keyframes sk-rotate { 100% { transform: rotate(360deg); -webkit-transform: rotate(360deg) }}

    @-webkit-keyframes sk-bounce {
        0%, 100% { -webkit-transform: scale(0.0) }
        50% { -webkit-transform: scale(1.0) }
    }

    @keyframes sk-bounce {
        0%, 100% {
            transform: scale(0.0);
            -webkit-transform: scale(0.0);
        } 50% {
              transform: scale(1.0);
              -webkit-transform: scale(1.0);
          }
    }

</style>
<div class="page-loader">

    <div class="page-loader__sky-scene">
        <div class="page-loader__sky-scene__cloud cloud-1"><svg xmlns="http://www.w3.org/2000/svg" width="160.961" height="100" viewBox="0 0 160.961 100">
                <path id="Union_2" data-name="Union 2" d="M65.524,100a14.438,14.438,0,0,1-.492-28.867,5.371,5.371,0,0,1-.006-6.7H14.438a14.437,14.437,0,1,1,0-28.875H42.2a5.676,5.676,0,0,1,.3-6.687H41.7A14.438,14.438,0,0,1,41.7,0h81a14.438,14.438,0,0,1,0,28.876H67.276a5.676,5.676,0,0,1,.3,6.687H95.438a14.437,14.437,0,1,1,0,28.875H89.956a5.369,5.369,0,0,1,0,6.687h56.567a14.438,14.438,0,1,1,0,28.876Z" fill="#f8f9fb"/>
            </svg>
        </div>
        <div class="page-loader__sky-scene__cloud cloud-2"><svg xmlns="http://www.w3.org/2000/svg" width="306.222" height="120" viewBox="0 0 306.222 120">
                <path id="Union_13" data-name="Union 13" d="M76.175,120a17.775,17.775,0,1,1,0-35.551h50.551a9.192,9.192,0,0,1-.228-7.609H17.776a17.775,17.775,0,1,1,0-35.551H161.284a9.624,9.624,0,0,1-1.933-5.738H117.229a17.775,17.775,0,1,1,0-35.551H232.294a17.775,17.775,0,1,1,0,35.551H192.918a9.624,9.624,0,0,1-1.933,5.738h1.378a17.775,17.775,0,1,1,0,35.551H158.636a9.192,9.192,0,0,1-.228,7.609h130.04a17.775,17.775,0,0,1,0,35.551Z" fill="#f8f9fb"/>
            </svg>
        </div>
        <div class="page-loader__sky-scene__cloud cloud-3"><svg xmlns="http://www.w3.org/2000/svg" width="388.918" height="143.999" viewBox="0 0 388.918 143.999">
                <path id="Union_12" data-name="Union 12" d="M-109.62,130A18.076,18.076,0,0,1-127.7,111.922,18.076,18.076,0,0,1-109.62,93.846H22.043a13.084,13.084,0,0,1-.2-2.307V81.2a12.942,12.942,0,0,1,2.8-8.055h-49.47A15.254,15.254,0,0,1-40.089,57.887,15.254,15.254,0,0,1-24.835,42.633H90.333a12.947,12.947,0,0,1-1.473-6.017V26.479a12.976,12.976,0,0,1,.737-4.325H62.554a18.077,18.077,0,0,1,0-36.154H179.4a18.077,18.077,0,0,1,0,36.154h-46.2a12.976,12.976,0,0,1,.737,4.325V36.616a12.947,12.947,0,0,1-1.473,6.017h83.579a15.254,15.254,0,0,1,0,30.508H64.116a12.942,12.942,0,0,1,2.8,8.055V91.539a13.084,13.084,0,0,1-.2,2.307H243.146a18.076,18.076,0,1,1,0,36.153Z" transform="translate(127.696 14)" fill="#f8f9fb"/>
            </svg>
        </div>
        <div class="page-loader__sky-scene__cloud cloud-4"><svg xmlns="http://www.w3.org/2000/svg" width="290.222" height="114" viewBox="0 0 290.222 114">
                <path id="Union_6" data-name="Union 6" d="M72.235,114a16.887,16.887,0,0,1,0-33.773h78.79a9.143,9.143,0,0,1,1.836-5.451H16.887a16.887,16.887,0,0,1,0-33.773h103a8.735,8.735,0,0,1,.216-7.229H72.235A16.887,16.887,0,0,1,72.235,0h201.1a16.887,16.887,0,0,1,0,33.773H150.129A8.733,8.733,0,0,1,150.345,41h31.926a16.887,16.887,0,1,1,0,33.773H181a9.142,9.142,0,0,1,1.836,5.451h37.278a16.887,16.887,0,1,1,0,33.773Z" transform="translate(290.222 114) rotate(180)" fill="#f8f9fb"/>
            </svg>
        </div>
    </div>
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>


</div>
