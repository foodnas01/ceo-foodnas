@extends('layouts.main')
@section('style')
<style>
.pagination>.active>a, .pagination>.active>span, .pagination>.active>a:hover, .pagination>.active>span:hover, .pagination>.active>a:focus, .pagination>.active>span:focus {
    z-index: 3;
    color: #fff;
    cursor: default;
    background: #337ab7;
}
</style> 
@stop

@section('content')
<!-- Conent Section -->
			<main id="main" class="cnt_pages">
				<div class="content_holder">
					<h1 class="text-center">Terra Virtua Press</h1>
					<div class="article_wrap">
                  <table width="100%" id="pressTable">
                    <thead>
                         <tr>
                            <th class="hide">created_at</th>
                            <th></th>

                         </tr>
                    </thead>
                <tbody>
                <?php  
                    foreach ($articles as $key => $article) : ?>

                     <tr>
                        <td class="hide" ><?php echo $article->published; ?></td>
                     <td>
                          <article class="article" style="padding: 10px 15px;">
                                                <h2>
                                                <a href="<?php echo $article->link; ?>" target="_blank" class="title">
                                                <?php echo $article->title; ?>
                                                </a>
                                               
						                  		<span class="updated">
                                                  <?php echo date("M d, Y ", strtotime($article->published)); ?>, <?php echo $article->author; ?>  
                                                </span>
				                     			</h2>
						                    	<!-- <p>
                                                <?php // echo $article['short_content']; ?>    
                                                </p> -->
                                                </article>       
                                            </td> 
                                            </tr>

                <?php endforeach; ?>
                </tbody>
                </table>
            		</div>
		 		</div>
			</main>
<!-- Conent Section end -->
@stop

@section('script')
    <!-- DataTables JavaScript -->
    <script src="{!! asset('assets/plugin/datatables/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! asset('assets/plugin/datatables-plugins/dataTables.bootstrap.min.js') !!}"></script>
    <script src="{!! asset('assets/plugin/datatables-responsive/dataTables.responsive.js') !!}"></script>
    <script>
    $(document).ready( function () {
    
    $('#pressTable').DataTable({
    bFilter: false,
    bInfo: false,
    bLengthChange: false,
    sDom: '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
    "order": [0, 'desc']
     }
    
    );
    
    } );
    </script> 
@stop