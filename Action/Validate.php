<?php
namespace Action;
class Validate extends Common{
    protected $Vali;
    public function __construct()
    {
        $this->Vali         = L('Validate');
    }
    // +------------------------------------------------------
    // | 增加修改栏目验证
    // +------------------------------------------------------
    public function inputMenu($param){
        // 验证规则
        $rule = [
            'menutype'      => 'require|number',
            'name'          => 'require|min:2|max:25|chsDash',
            'ismenu'        => 'require|number',
            'name2'         => 'regex:^[A-Za-z0-9_\/-]+$',
            'status'        => 'require|number'
        ];
        // 描述文本
        $msg = [
            'menutype.require'=> '必须选择类型',
            'name.require'  => '名称必须输入',
            'mame.min'      => '名称最少2个字符',
            'name.max'      => '名称最多不能超过25个字符',
            'name.chsDash'  => '名称只支持汉字、字母、数字、下划线和斜线',
            'ismene.require'=> '是否菜单必须选择',
            'name2.regex'   => '名称只支持字母、数字、下划线和斜线',
            'status.reqire' => '状态必须输入',
            'status.number' => '状态只能数字'
        ];
        $Validate = $this->Vali->make($rule, $msg);
        if (!$Validate->check($param)) {
            return $this->msg($Validate->getError());
        }
    }
    // 创建组输入验证
    public function inputgroup($param){
        $rule = [
            'name'          => 'require|chsDash',
        ];
        $msg = [
            'name.require'  => '头衔必须输入',
            'name.chsDash'  => '名称只支持汉字、字母、数字、下划线和斜线'
        ];
        $Vali = $this->Vali->make($rule,$msg);
        if(!$Vali->check($param)){
            return $this->msg($Vali->getError());
        }
    }
}