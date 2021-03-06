@extends('houtai.index')

@section('content')
<div class="mws-panel grid_8">
  <div class="mws-panel-header">
    <span>
      <i class="icon-table"></i>用户列表</span>
  </div>
  <div class="mws-panel-body no-padding">
    <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">
      <div id="DataTables_Table_1_length" class="dataTables_length">
        <label>显示
          <select name="DataTables_Table_1_length" size="1" aria-controls="DataTables_Table_1">
            <option value="10" selected="selected">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option></select>条</label>
      </div>
      <div class="dataTables_filter" id="DataTables_Table_1_filter">
        <label>搜索:
          <input type="text" aria-controls="DataTables_Table_1"><button class="btn btn-primary">搜索</button></label></div>
      <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
        <thead>
          <tr role="row">
            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 203px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">id</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 260px;" aria-label="Browser: activate to sort column ascending">用户名</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 245px;" aria-label="Platform(s): activate to sort column ascending">邮箱</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 172px;" aria-label="Engine version: activate to sort column ascending">头像</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 127px;" aria-label="CSS grade: activate to sort column ascending">操作</th></tr>
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
        	@foreach($users as $k=>$v)
	          	<tr class="@if($k%2 == 0)
	          				even
	          				@else
	          				odd
	          				@endif
	          	">
	            <td class="  sorting_1">{{$v['id']}}</td>
	            <td class=" ">{{$v['username']}}</td>
	            <td class=" ">{{$v['email']}}</td>
	            <td class=" ">{{$v['pic']}}</td>
	            <td class=" "><a href="" style="color:black;font-size:16px;"><i class="icon-pencil"></i></a>&nbsp;&nbsp;
	            <a href="" style="color:black;font-size:16px;"><i class="icon-remove"></i></a></td>
	          	</tr>
          	@endforeach
        </tbody>
      </table>
      {!!$users->render()!!}
      <div class="dataTables_info" id="DataTables_Table_1_info">Showing 1 to 10 of 57 entries</div>
      <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
        <a class="first paginate_button paginate_button_disabled" tabindex="0" id="DataTables_Table_1_first">First</a>
        <a class="previous paginate_button paginate_button_disabled" tabindex="0" id="DataTables_Table_1_previous">Previous</a>
        <span>
          <a class="paginate_active" tabindex="0">1</a>
          <a class="paginate_button" tabindex="0">2</a>
          <a class="paginate_button" tabindex="0">3</a>
          <a class="paginate_button" tabindex="0">4</a>
          <a class="paginate_button" tabindex="0">5</a></span>
        <a class="next paginate_button" tabindex="0" id="DataTables_Table_1_next">Next</a>
        <a class="last paginate_button" tabindex="0" id="DataTables_Table_1_last">Last</a></div>
    </div>
  </div>
</div>
@endsection