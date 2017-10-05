function imgclick(obj)
{
	window.open(obj.src,'_blank');
}

function del(no)
{
	$.post("member_del.php",
    {
        no:no
    },
    function(data, status){
        alert('삭제가 완료되었습니다.');
        location.reload();
    });
}

function update(no,cnt)
{
	$.post("member_update.php",
    {
        no:no,
        phone:$('#'+cnt+"phone").val(),
        title:$('#'+cnt+"title").val(),
        title:$('#'+cnt+"content").val()
    },
    function(data, status){
        alert('업데이트 완료되었습니다.');
        location.reload();
    });
}

function save(){
    alert('kkk');
    if(pfurl)
    {
        var phone=$("#phone").val();
        var title=$("#title").val();
        var content=$("#content").val();
        if(phone&&title&&content){
            $.post("member_insert.php",
            {
                pfurl:pfurl,
                phone:phone,
                title:title,
                content:content
            },
            function(data, status){
                alert('회원추가가 완료되었습니다.');
                pfurl='';
                location.reload();
            });   
        }else{
            alert('내용을 채워주세요.');
        }

    }else{
        alert('프로필 사진을 선택해주세요.');
    }
}