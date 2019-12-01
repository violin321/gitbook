这么喜欢我的嘛
- [ ] write some articles
- [x] drink a cup of tea


<SCRIPT LANGUAGE="JavaScript">
            function password() 
            {
                var testV = 1;
                var pass1 = prompt('请输入密码:','');
                while (testV < 3) 
                {
                    if (!pass1)
                    history.go(-1);
                    if (pass1 == "0121") 
                    {
                        alert('密码正确!');
                        break;
                    }
                    testV+=1;
                    var pass1 =
                    prompt('密码错误!请重新输入:');
                }
                if (pass1!="password" & testV ==3)
                history.go(-1);
                return " ";
            }
            document.write(password());
</SCRIPT>