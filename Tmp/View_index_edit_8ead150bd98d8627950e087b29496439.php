<?php !defined('HY_PATH') && exit('HY_PATH not defined.'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="<?php echo WWW_STATIC;?>mobile/css/ydui.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1231984_cqaovolx1kq.css">
    <link href="https://cdn.bootcss.com/mdui/0.4.3/css/mdui.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo WWW_STATIC;?>mobile/css/app.css">
    <script src="//cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/mdui/0.4.3/js/mdui.min.js"></script>

</head>
<body class="mdui-theme-primary-blue-grey mdui-theme-accent-deep-purple" style="background:#f1f5f7">

<style>
    .edit_header { margin: 10px; background: #f5f5f5;  }
    .edit_contant { background: #fff; }
    .edit_contant .table{ overflow-x: scroll;}
    .edit_contant .table>table {  width: 550px }
    .edit_contant .table>table thead { background: #86acbf; }
    .edit_contant .table>table thead tr { height: 36px; font-size: 14px; color: #fff; font-weight: 600; }
    .edit_contant .table>table thead tr td { padding: 0 10px; text-align: center;}
    .edit_contant .table>table tbody tr td { padding: 0 10px; text-align: center; border-bottom: 1px solid #f5f5f5; height: 40px; line-height: 40px; font-size: 14px; border-left: 1px solid #f5f5f5;}
    .edit_contant .table .paixu{     border: 0;height: 100%;width: 100%;text-align: center;background: #fcfbfd;color: #9C27B0; }
</style>
<section class="g-flexview">
    <!-- 顶部导航 -->
    <div class="mdui-toolbar mdui-color-theme">
    <a href="javascript:history.back(-1);" class="mdui-btn mdui-btn-icon"><i class="mdui-icon iconfont iconarrow-left-line"></i></a>
    <span class="mdui-typo-title"><?php echo $title;?></span>
    <div class="mdui-toolbar-spacer"></div>
</div>
    <!-- 主体内容 -->
    <div class="g-scrollview">
        <div class="edit_header">
            <a href="<?php echo URL('/index','module',['type'=>'index','sid'=>1]);?>" class="btn btn-primary">增加模块</a>
        </div>
        <div class="edit_contant">
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <td style="width:20px;">排序</td>
                            <td style="width: 120px;text-align: left">名称</td>
                            <td style="width: 120px;">模块名称</td>
                            <td style="width: 60px;">状态</td>
                            <td style="width: 80px; text-align: center;">操作</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding:0;"><input class="paixu" type="text" name="paixu" value="1"></td>
                            <td style="text-align:left;">首页幻灯</td>
                            <td>Banner</td>
                            <td style="color: #4CAF50;">显示</td>
                            <td> <a href="" class="btn btn-sm btn-info">编辑</a> <a href="" class="btn btn-sm btn-danger">删除</a> </td>
                        </tr>
                        <tr>
                            <td style="padding:0;"><input class="paixu" type="text" name="paixu" value="1"></td>
                            <td style="text-align:left;">自定义导航</td>
                            <td style="text-align: center; width: 120px;">HTML</td>
                            <td style="text-align: center;width:60px; color: #607D8B;">隐藏</td>
                            <td> <a href="" class="btn btn-sm btn-info">编辑</a> <a href="" class="btn btn-sm btn-danger">删除</a> </td>
                        </tr>
                        <tr>
                            <td style="padding:0;"><input class="paixu" type="text" name="paixu" value="1"></td>
                            <td style="text-align:left;">一个链接</td>
                            <td style="text-align: center; width: 120px;">Link</td>
                            <td style="text-align: center;width:60px; color: #607D8B;">隐藏</td>
                            <td> <a href="" class="btn btn-sm btn-info">编辑</a> <a href="" class="btn btn-sm btn-danger">删除</a> </td>
                        </tr>
                        <tr>
                            <td style="padding:0;"><input class="paixu" type="text" name="paixu" value="1"></td>
                            <td style="text-align:left;">自定义内容</td>
                            <td style="text-align: center; width: 120px;">HTML</td>
                            <td style="text-align: center;width:60px; color: #607D8B;">隐藏</td>
                            <td> <a href="" class="btn btn-sm btn-info">编辑</a> <a href="" class="btn btn-sm btn-danger">删除</a> </td>
                        </tr>
                        <tr>
                            <td style="padding:0;"><input class="paixu" type="text" name="paixu" value="1"></td>
                            <td style="text-align:left;">自定义导航</td>
                            <td style="text-align: center; width: 120px;">HTML</td>
                            <td style="text-align: center;width:60px; color: #607D8B;">隐藏</td>
                            <td> <a href="" class="btn btn-sm btn-info">编辑</a> <a href="" class="btn btn-sm btn-danger">删除</a> </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- 底部导航 -->
    <div style="text-align: center;padding: 10px 0 20px;">
    <div>
        Powered by <a href="#" style="color: #2dc5d8;">蜗牛系统</a> Version 1.0
    </div>
</div>
</section>
    <script src="<?php echo WWW_STATIC;?>mobile/js/ydui.js"></script>
</body>
</html>