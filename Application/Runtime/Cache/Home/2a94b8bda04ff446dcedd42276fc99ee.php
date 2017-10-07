<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
    <head>
        <title>团团打卡 学讲话</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="stylesheet" href="/19th/Public/js/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css">
        <script src = '/19th/Public/js/jquery-2.1.4.min.js'></script>
        <script src = '/19th/Public/js/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js'></script>
        <script src = '/19th/Public/js/pageChange.js?v=<?php echo time();?>'></script>
        <script src = '/19th/Public/js/main.js?v=<?php echo time();?>'></script>
        <script src = "/19th/Public/js/styleSet.js?v=<?php echo time();?>"></script>
        <link rel="stylesheet" href="/19th/Public/css/stlye.css?v=<?php echo time();?>">
        <link rel="stylesheet" href="/19th/Public/css/animate.min.css?v=<?php echo time();?>">
    </head>
    <body>
        <div data-role="page" id="mask">

        </div>
        <div class="mask">

        </div>
        <div data-role="page" id="beginPage">
            <img src="/19th/Public/images/VoiceofYoung.png?v=1" alt="" class="logo">
            <img src="/19th/Public/images/beginXi.png?v=1" alt="" class="animated pulse beginImg">
            <div id="btnContainer">
                <div class="o_btn startBtn btn">
                    开始游戏
                </div>
                <div class="y_btn listBtn btn">
                    查看榜单
                </div>
            </div>
            <span class="copyContainer">
                <span class="copyright">©️红岩网校工作站</span>
            </span>
        </div>
        <div data-role="page" id="backPage">
            <img src="/19th/Public/images/VoiceofYoung.png?v=1" alt="" class="logo">
            <div class="programerHolder">
                    <div class="position_box">
                        <img src="/19th/Public/images/developer_title.png?v=1" alt="" class="developer_title">
                        <span class="closeP">&nbsp;X&nbsp;</span>
                        <ul class="programer">
                            <li>产品设计：杨奇凡</li>
                            <li>
                                视觉设计：田梅琳
                            </li>
                            <li>
                                程序开发：周政
                            </li>
                            <li>
                                指导教师：杨奇凡
                            </li>
                            <li>
                                出品：红岩网校工作站
                            </li>
                        </ul>
                    </div>
            </div>
            <span class="Qc">

            </span>
            <div class="title_container">
                    <img src="/19th/Public/images/background_title.png" alt="" class="background_title">
            </div>
            <div class="background_content">
                党的十八大以来，以习近平同志为核心的
                党中央围绕改革发展稳定、内政外交国防、
                治党治国治军等领域形成了一系列内涵丰
                富、思想深刻、特色鲜明的治国理政新理
                念新思想新战略。2017年10月18日，党
                的第十九大将胜利召开，为深化党的最新
                理论成果的学习宣传，更好地帮助团员青
                年。特别是青年大学生深刻领会党的创新
                理论的丰富内涵、精神实质和实践要求，
                我们特开发“学习新名词 喜迎十九大”新媒
                体产品，供大家学习参考。
            </div>
            <div class="btnContainer">
                <div class="o_btn playBtn btn">我要学习</div>
                <div class="y_btn return btn">返回</div>
            </div>
            <span class="copyContainer">
                <span class="copyright">©️红岩网校工作站</span>
            </span>
        </div>
        <div data-role="page" id="gamePage">
            <span class="Qtitle">

            </span>
            <div class="questionContainer">
                <img src="/19th/Public/images/flag.png?v=1" alt="" class="flag">
                <div class="conversation">
                    <p class="littleTitle">

                    </p>
                    <div class="sentences">

                    </div>
                    <div class="provenance">

                    </div>
                </div>
                <div class="allusion">
                    <p class="littleTitle">

                    </p>
                    <div class="box">
                        <div class="refrence">

                        </div>
                    </div><br><br>
                    <div class="box">
                        <div class="via">

                        </div>
                    </div><br>
                    <div class="box">
                        <div class="explain">

                        </div>
                    </div><br><br>
                </div>
            </div>
            <div class="nextBtn y_btn btn">
                <span class="time">15s</span>
            </div>
            <span class="copyContainer">
                <span class="copyright">©️Redrock</span>
            </span>
        </div>
        <div data-role="page" id="overPage">
            <div class="firstState">
                <img src="/19th/Public/images/good.png" alt="" class="goodBack">
                <div class="goOver btn">

                </div>
            </div>
            <div class="secondState">
                <img src="/19th/Public/images/tuanLogo.png" alt="" class="logo">
                <img src="/19th/Public/images/myCardtitle.png" alt="" class="cardTitle">
                <div class="cardBack">
                    <p class="num">1</p>
                    <p class="sentence">
                        亲！你总共打卡<span class="days">1</span>天，共学习了<span class="groups">5</span>组，在学习榜单中排名第<span class="rankNow">1</span>。
                    </p>
                </div>
                <div class="ok btn bug">

                </div>
                <div class="replay btn bug">

                </div>
            </div>
            <span class="copyContainer">
                <span class="copyright">©️Redrock</span>
            </span>
        </div>
        <div data-role="page" id="listPage">
            <img src="/19th/Public/images/tuanLogo.png" alt="" class="logo">
            <div class="test">

            </div>
                <div class="listHolder">
                    <img src="/19th/Public/images/listTop.png" alt="" class="listTop">
                    <img src="" alt="" class="avatar">
                    <p class="showP">
                        <span class="usrName">咕咚咕咚好</span> 排名:第 <span class="rankNum">89</span> 名
                    </p>
                    <p class="showP">
                        <span class="goCardPage">我的打卡</span>
                    </p>
                    <ul class="list">
                        <li style="background: #f6e9e9;color: #6f6f6f">
                            <span class="aRank" style="margin-right: 7%;">
                                名次
                            </span>
                            <span class="aName" style="margin-left: 12%">昵称</span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <img src="/19th/Public/images/au.png" alt="" class="medal">
                            <span class="aName" style="padding-top: 3px;"></span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <img src="/19th/Public/images/si.png" alt="" class="medal">
                            <span class="aName" style="padding-top: 3px;"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <img src="/19th/Public/images/Cu.png" alt="" class="medal">
                            <span class="aName" style="padding-top: 3px;"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">4</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">5</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">6</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">7</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">8</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">9</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">10</span>
                            <span class="aName"> </span>
                        </li>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">11</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">12</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">13</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">14</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">15</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">16</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">17</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">18</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">19</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">20</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">11</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">12</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">13</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">14</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">15</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">16</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">17</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">18</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">19</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">20</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">11</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">12</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">13</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">14</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">15</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">16</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">17</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">18</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">19</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">20</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">11</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">12</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">13</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">14</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">15</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">16</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">17</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">18</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">19</span>
                            <span class="aName"> </span>
                        </li>
                        <li>
                            <img src="" alt="" class="avatarBox">
                            <span class="aRank">20</span>
                            <span class="aName"> </span>
                        </li>
                    </ul>
                </div>
            <div class="return btn">

            </div>
            <span class="copyContainer">
                <span class="copyright">©️Redrock</span>
            </span>
        </div>
        <script src="//res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
        <script>
            var shareTitle = '团团打卡 学讲话';
            var shareDesc = "<?php echo ($share); ?>";
            var shareURL = "https://redrock.cqupt.edu.cn/praise_xi_shanbei/";
            var shareImg = "https://redrock.cqupt.edu.cn/praise_xi_shanbei/Public/images/tuanshare.png";
            wx.config({
                debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
                appId: 'wx81a4a4b77ec98ff4', // 必填，公众号的唯一标识
                timestamp: "<?php echo ($signature['timestamp']); ?>", // 必填，生成签名的时间戳
                nonceStr: "<?php echo ($signature['noncestr']); ?>", // 必填，生成签名的随机串
                signature: "<?php echo ($signature['signature']); ?>",// 必填，签名，见附录1
                jsApiList: [
                    'onMenuShareTimeline',
                    'onMenuShareAppMessage',
                    'onMenuShareQQ',
                    'onMenuShareQZone',
                    'hideAllNonBaseMenuItem'
                ] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
            });
            function initShare(shareTitle, shareDesc, shareURL, shareImg) {
                wx.ready(function(){
                    wx.onMenuShareTimeline({
                        title: shareDesc, // 分享标题
                        link: shareURL,
                        imgUrl: shareImg,
                        success: function () {
//                        alert('分享成功!');// 用户确认分享后执行的回调函数
                        },
                        cancel: function () {
                            // 用户取消分享后执行的回调函数
                        }
                    });
                    wx.onMenuShareAppMessage({
                        title: shareTitle, // 分享标题
                        desc: shareDesc, // 分享描述
                        link: shareURL,
                        imgUrl: shareImg,
                        type: '', // 分享类型,music、video或link，不填默认为link
                        dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
                        success: function () {
//                        alert('分享成功!');// 用户确认分享后执行的回调函数
                        },
                        cancel: function () {
                            // 用户取消分享后执行的回调函数
                        }
                    });
                    wx.onMenuShareQQ({
                        title: shareTitle, // 分享标题
                        desc: shareDesc, // 分享描述
                        link: shareURL,
                        imgUrl: shareImg,
                        success: function () {
//                        alert('分享成功!');// 用户确认分享后执行的回调函数
                        },
                        cancel: function () {
                            // 用户取消分享后执行的回调函数
                        }
                    });
                    wx.onMenuShareQZone({
                        title: shareTitle, // 分享标题
                        desc: shareDesc, // 分享描述
                        link: shareURL,
                        imgUrl: shareImg,
                        success: function () {
//                        alert('分享成功!');// 用户确认分享后执行的回调函数
                        },
                        cancel: function () {
                            // 用户取消分享后执行的回调函数
                        }
                    });
                });
            }
            initShare(shareTitle, shareDesc, shareURL, shareImg);
        </script>

    </body>
</html>