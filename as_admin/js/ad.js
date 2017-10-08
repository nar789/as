function imgclick(obj)
{
	window.open(obj.src,'_blank');
}

function del(no)
{
    $.post("ad_del.php",
    {
        no:no
    },
    function(data, status){
        alert('삭제가 완료되었습니다.');
        location.reload();
    });
}



function save(){

    if(pfurl)
    {
        var url=$("#url").val();
        var prob=$("#prob").val();
        $.post("ad_insert.php",
        {
            pfurl:pfurl,
            url:url,
            prob:prob
        },
        function(data, status){
            alert('광고 추가가 완료되었습니다.');
            pfurl='';
            location.reload();
        });   

    }else{
        alert('광고 사진을 선택해주세요.');
    }
}


function update(no,cnt)
{
    $.post("ad_update.php",
    {
        no:no,
        url:$('#'+cnt+"url").val(),
        prob:$('#'+cnt+"prob").val()
    },
    function(data, status){
        alert('업데이트 완료되었습니다.');
        location.reload();
    });
}
