{include common/header}
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
    {include common/navbar}
    <!-- 主体内容 -->
    <div class="g-scrollview">
        <div class="edit_header">
            <a href="{#URL('/index','module',['type'=>'index','sid'=>1])}" class="btn btn-primary">增加模块</a>
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
    {include common/copyright}
</section>
{include common/footer}