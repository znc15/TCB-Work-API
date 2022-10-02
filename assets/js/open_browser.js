
        var is_weixin = (function () {
            var ua = navigator.userAgent.toLowerCase();
            if (ua.match(/MicroMessenger/i) == "micromessenger") {//微信中打开网页
                return true;
            } else if (ua.match(/QQ/i) == "qq") {//qq里打开网页
                return true;
            } else {
                return false;
            }
        })();
        window.onload = function () {
            //var winHeight = typeof window.innerHeight != 'undefined' ? window.innerHeight : document.documentElement.clientHeight;
            var tip = document.getElementById('weixin-tip-box');
            if (is_weixin) {
                tip.style.display = 'block';
                return false;
            }
        }