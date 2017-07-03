


function InputCheck(signForm){


if(signForm.username.value == ""){


alert("用户名不能为空！");
signForm.username.focus();
return(false);

}

if(signForm.passwd.value==""){


alert("请设置密码");
signForm.passwd.focus();
return(false);


}


if(signForm.pwd.value != signForm.passwd.value){



alert("两次密码不一致！");

signForm.pwd.focus();
return(false);

}
}

