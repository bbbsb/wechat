<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="{{asset('js/app.js')}}"></script>
@include('UEditor::head')

<div class="container">
    <div class="row">
        <form method="post" action="{{url("/home/createArticleHandler")}}">
            {{csrf_field()}}
            <h1>添加文章</h1>
            <div class="form-group">
                <label for="title">标题</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="image">背景图</label>
                <input type="file" name="image" class="form-control" id="image" placeholder="选择一张图片">
            </div>
            <div class="form-group">
                <label for="content">文章内容</label>
                <div id="container" name="content"></div>
            </div>
            <button type="submit" class="btn btn-default" id="submit">提交</button>
        </form>

        <!-- 实例化编辑器 -->
        <script type="text/javascript">
            var ue = UE.getEditor('container');
            ue.ready(function() {
                ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
            });
        </script>

        <script>
            $('#submit').click(function(){

            });
        </script>
    </div>
</div>
