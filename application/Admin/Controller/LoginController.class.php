<?php
//1. 声明命名空间
namespace Admin\Controller;
//2. 引入控制器基类
use Think\Controller;

//3. 编写Index控制器
class LoginController extends Controller{
    //4. 编写login方法
    function login(){
        $this->display();
    }

    function verify(){
        $config = array(
            'imageH'    => 38,   // 验证码图片高度
            'imageW'    => 74,   // 验证码图片宽度
            'bg'        => array(93, 202, 27),  // 背景颜色
            'fontSize'  => 15,
            'useCurve'  => false,  // 是否画混淆曲线
            'useNoise'  => false,  // 是否添加杂点
            'fontttf' => '4.ttf',
            'length' => 4,
        );
        //1. 实例化Verify类
        $verify = new \Think\Verify($config);
        //2. 调用entry方法绘制验证码
        $verify->entry();
    }

    public function loginok(){
        //判断请求类型
        if(IS_POST){
            //1. 验证用户输入验证码和系统产生验证码是否匹配
            //① 接收表单提交的验证码
            $code = I('post.code');
            //② 验证接收的表单验证码和系统验证码是否匹配
            $verify = new \Think\Verify();
            //参数:用户提交的验证码
            if(!$verify->check($code)){
                $this->error('验证码错误', U('login'), 3);
            }
            //验证用户
            $post = I('post.');
            //对密码进行加密
            $post['pwd'] = getPwd($post['pwd']);
            //需要根据用户提供的信息进行查询
            $data = M('manager') -> where($post) -> find();
            //如果data为真则说明验证成功
            if($data){
                //会话保持，跳转到后台首页
                session('name',$data['name']);//用户名
                session('time',$data['time']);//上次登录时间
                //更新最后一次登录时间
                M('manager') -> save(array('time' =>time(),'id' => $data['id']));
                //跳转
                $this -> success('登录成功~',U('Index/index'),3);
            }else{
                //失败
                $this -> error('用户名或密码错误...');
            }
        }else{
            //展示登录页面
            $this -> display();
        }
    }

    //退出成功
    public  function logout(){
        $null = session(null);
        if(!$null){
            //跳转
            $this -> success('退出成功!!!',U('login'),3);
        }else{
            $this -> error('退出失败....');
        }
    }

    //修改密码
    public function editpwd(){
        $this->display();
    }

    //保存新密码
    public function editpwdok(){
        //验证用户
        $pwd = I('post.pwd');
        //对密码进行加密
        $post['pwd'] = getPwd($pwd);
        //获取用户名
        $post['name'] = session('name');
        //需要根据用户提供的信息进行查询
        $data = M('manager') -> where($post) -> find();
        if($data){
            //获取新密码
            $old_pwd = I('post.old_pwd');
            //获取确认密码
            $new_pwd = I('post.new_pwd');
            if($old_pwd == $new_pwd){
                $info = array(
                    'name' => $data['name'],
                    'pwd' => getPwd($new_pwd),
                    'time' => $data['time'],
                    'id' => $data['id'],
                );
                $manager = M('manager');
                if($manager->save($info)){
                    session(null);
                    $this -> success('修改成功!!!',U('Login'),3);
                }else{
                    $this -> error('修改密码失败,请稍后重试!!!',U('editpwd'),3);
                }
            }else{
                $this -> error('两次新密码不一致,请重新输入!!!',U('editpwd'),3);
            }
        }else{
            $this -> error('原密码错误,请重新输入!!!',U('editpwd'),3);
        }
    }
}