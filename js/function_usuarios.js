




function DeleteUser(deleteid){
    $.ajax({
        url:"../guardar/delete.php",
        type:'post',
        data:{
            deletesent:deleteid
        }
    });
}