/**
 * Created by hughes on 2017/3/4.
 */
timer = null;
timeNum = 15;
nextFlag = 0;
current = 1;
$(function () {
    var mask = $('.mask');
    var developer_list = $('.programerHolder');
    var close_developer = $('.closeP');
    var time_content = $('.time');
    var game_page = $('#gamePage');
    var next_question = $('.nextBtn');
    var q_title = $('.Qtitle');
    var q_content = $('.sentences');
    var myStudyBtn = $('.studyBtn');
    var replayBtn = $('.replayBtn');
    replayBtn.on('click',function(){
        $.mobile.changePage('#beginPage',{
            transition:'flow'
        });
    });
    myStudyBtn.on('click',function(){
        $.mobile.changePage('#overPage',{
            transition:'flow'
        });
    });
   $('.startBtn').on('click',function(){
        $.mobile.changePage('#backPage',{
            transition:'flow'
        });
    });
    $('.Qc').on('click',function(){
        mask.css('display','block');
        developer_list.css('display','block');
    });
    close_developer.on('click',function(){
        mask.css('display','none');
        developer_list.css('display','none');
    });
    $('.listBtn').on('click',function(){
        $.mobile.loading('show');
        var _data = {};
        _data.from = 1;
        _data.to = 50;
        $.post(rank_link,_data,function(data){
            $.mobile.loading('hide');
            if(data.status == 200){
                $.mobile.changePage('#listPage',{
                    transition: 'flow'
                })
            }else {
                alert(data.status);
            }
        });
    });
    $('.return').on('click',function(){
        $.mobile.changePage('#beginPage',{
            transition:'flow'
        });
    });
    $('.close').on('tap',function(){
        $('.warning').css('display','none');
        $('.mask').css('display','none');
    });
    $('.playBtn').on('click',function(){
        clearInterval(timer);
        timer = setInterval(function(){
            timeNum--;
            time_content.html(timeNum+' s');
            if (timeNum == 0){
                nextFlag = 1;
                clearInterval(timer);
                time_content.html('下一个');
            }
        },1000);
        $.mobile.loading('show');
        $.post(question_link,1,function(data) {
            if (data.status == 200) {
                q_title.html(data.data.question.title);
                q_content.html(data.data.question.content);
                current = data.data.current;
                setTimeout(function () {
                    $.mobile.loading('hide');
                    $.mobile.changePage('#gamePage', {
                        transition: 'flow'
                    });
                }, 200)
            }
            else if (data.status == 403){
                $.mobile.loading('hide');
                $('.mask').css('display','block');
            }else{
                alert(data.error);
            }
        });
    });

    next_question.on('click',function(){
        if (nextFlag == 0){
            return false;
        }
        nextFlag = 0;
        if(current == 5){
            $.mobile.loading('show');
            $.post(link_rank,1,function(data){
                $.mobile.loading('hide');
                if(data.status == 200){
                    $('.secondState').css('display','none');
                    $('.firstState').css('display','block');
                    $('.days').html(data.data.days);
                    $('.num').html(data.data.days);
                    $('.groups').html(data.data.groups);
                    $('.rankNow').html(data.data.rank);
                    $.mobile.changePage('#overPage',{
                        transition:'flow'
                    });
                    shareDesc = '我正在参加 “团团打卡 学讲话” 特训，打卡第'+data.data.days+'天，排第'+data.data.rank+'名，明天继续！你也加入吧'
                    initShare(shareTitle, shareDesc, shareURL, shareImg);
                }else {
                    alert(data.error);
                }
            });
            return false;
        }
        clearInterval(timer);
        time_content.html(15+' s');
        timeNum = 15;
        timer = setInterval(function(){
            timeNum--;
            time_content.html(timeNum+' s');
            if (timeNum == 0){
                nextFlag = 1;
                clearInterval(timer);
                time_content.html('下一个')
            }
        },1000);
        var _data = {};
        _data.new = "true";
        $.mobile.loading('show');
        $.post(question_link,_data,function(data){
            $.mobile.loading('hide');
            if(data.status == 200){
                game_page.attr('style'," ");
                game_page.css('min-height',$(window).height());
                q_title.html(data.data.question.title);
                q_content.html(data.data.question.content);
                current = data.data.current;
            }else{
                console.log(data.info);
            }
        });
    });
    $('.ok').on('click',function(){
        time_content.html(15+' s');
        timeNum = 15;
        $.mobile.changePage('#beginPage',{
            transition:'flow'
        });
    });
    $('.replay').on('click',function(){
        $.mobile.changePage('#backPage',{
            transition:'flow'
        });
        time_content.html(15+' s');
        timeNum = 15;
    });
});