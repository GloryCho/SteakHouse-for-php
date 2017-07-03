function InputCheck(signForm){


if(signForm.username.value == ""){


alert("请填写用户名");
signForm.username.focus();
return(false);

}

if(signForm.passwd.value==""){


alert("请填写密码");
signForm.passwd.focus();
return(false);


}


}

