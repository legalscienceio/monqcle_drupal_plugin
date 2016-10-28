$ = jQuery;
	
$(document).ready(function(){
    monqcle = new MONQCLE({
       api_key: '55bf7b0bc304745f19334883',
       username: 'Guest',
       columns: 3,
       dataset_id: '57f79a56f7d1b63b23a9bcbd',
//       default_questions: ['56f2b922f7d1b6fe614e689c','56f2b93bf7d1b6fd614e68a0'],
       dataset_table_container: '#monq_dataset_table',
       questions_container: '#question_view',
       map_container: '#map_container',
       on_map_click: function(d,e){
           
           },
       on_map_hover: function(d,e){
           },
       })
})	