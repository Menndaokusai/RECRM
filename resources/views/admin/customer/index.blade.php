<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DataGrid Complex Toolbar - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="/jqeasyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="/jqeasyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="/jqeasyui/demo/demo.css">
    <script type="text/javascript" src="/jqeasyui/jquery.min.js"></script>
    <script type="text/javascript" src="/jqeasyui/jquery.easyui.min.js"></script>
</head>
<body>
<table class="easyui-datagrid" title="DataGrid Complex Toolbar" style="width:700px;height:250px"
       data-options="rownumbers:true,singleSelect:true,url:'datagrid_data1.json',method:'get',toolbar:'#tb'">
    <thead>
    <tr>
        <th data-options="field:'itemid',width:80">Item ID</th>
        <th data-options="field:'productid',width:100">Product</th>
        <th data-options="field:'listprice',width:80,align:'right'">List Price</th>
        <th data-options="field:'unitcost',width:80,align:'right'">Unit Cost</th>
        <th data-options="field:'attr1',width:240">Attribute</th>
        <th data-options="field:'status',width:60,align:'center'">Status</th>
    </tr>
    </thead>
</table>
<div id="tb" style="padding:5px;height:auto">
    <div style="margin-bottom:5px">
        <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true"></a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true"></a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true"></a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-cut" plain="true"></a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true"></a>
    </div>
    <div>
        Date From: <input class="easyui-datebox" style="width:80px">
        To: <input class="easyui-datebox" style="width:80px">
        Language:
        <select class="easyui-combobox" panelHeight="auto" style="width:100px">
            <option value="java">Java</option>
            <option value="c">C</option>
            <option value="basic">Basic</option>
            <option value="perl">Perl</option>
            <option value="python">Python</option>
        </select>
        <a href="#" class="easyui-linkbutton" iconCls="icon-search">Search</a>
    </div>
</div>
</body>
</html>