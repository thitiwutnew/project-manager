////////////////Page Add_Subtasks/////////////////////
$(document).on('click', '.hideok', function () {
    window.location.href = "MySubTasks.php"
});
$(document).on('click', '.hidefalse', function () {
    window.location.href = "Add_SubTasks.php"
});
    ///Script select///
$('#Taskmanager').ready(function () {
    var Taskname = $('#Tasktm').attr("name");
    var Taskmanager = $('#Taskmanager').val();
    $.ajax({
        url: "AjaxSubTasks.php",
        data: ({ subject_id: Taskmanager, pj: Taskname }),
        dataType: "json",
        beforeSend: function () {
            $("#selTypeRiskAllaa").html("");
        },
        success: function (json) {
            $.each(json, function (index, value) {
                $("#selTypeRiskAllaa").append('<option value="' + value.AssignTaskPoID + '" hidden>' + value.EmployeeFullName + '</option>');
            });
        }
    });
});

$('#Taskmanager').change(function () {
    var Taskmanager = $('#Taskmanager').val();
    var Taskname = $('#Tasktm').attr("name");
    $.ajax({
        url: "AjaxSubTasks.php",
        data: ({ subject_id: Taskmanager, pj: Taskname }),
        dataType: "json",
        beforeSend: function () {
            $("#selTypeRiskAllaa").html("");
        },
        success: function (json) {
            $.each(json, function (index, value) {
                $("#selTypeRiskAllaa").append('<option value="' + value.AssignTaskPoID + '" hidden>' + value.EmployeeFullName + '</option>');
            });
        }
    });
});
$('#selTypeRiskAll').ready(function () {
    var MemberProjectID = $('#Taskmanager').val();
    var Taskname = $('#Tasktm').attr("name");
    $.ajax({
        url: "AjaxSubTasks.php",
        data: ({ subject_id: MemberProjectID, pj: Taskname }),
        dataType: "json",
        beforeSend: function () {
            $("#selTypeRiskAllaa").html("");
        },
        success: function (json) {
            $("#selTypeRiskAllaa").html("");
            $.each(json, function (index, value) {
                $("#selTypeRiskAllaa").append('<option value="' + value.AssignTaskPoID + '" hidden>' + value.EmployeeFullName + '</option>');
            });
        }
    });
});        
////////////////End Page Add_Subtasks/////////////////
//////////////// Page Add_tasks//////////////////////
$(document).on('click', '.addTasksuccessok', function () {
    window.location.href = "MyTasks.php"
});
 //// Script select////
    $('#Taskmanager').ready(function() {
           var Taskname = $('#Tasktm').attr("name"); 
          var  Taskmanager =  $('#Taskmanager').val();
							$.ajax({
							url: "view_member.php",
							data: ({subject_id:Taskmanager,pj:Taskname,checkmm:"Checkmm"}),
							dataType: "json",
							beforeSend: function() {
								$("#selTypeRiskAllaa").html("");
							},
							success: function(json){
								$.each(json, function(index, value) {
								$("#selTypeRiskAllaa").append('<option value="' + value.MemberProjectID + '" hidden>' + value.EmployeeFullName + '</option>');
										});
									}
								});
							});

							$('#Taskmanager').change(function() {
                var  Taskmanager =  $('#Taskmanager').val();
                var Taskname = $('#Tasktm').attr("name"); 
							$.ajax({
							url: "view_member.php",
              data: ({subject_id:Taskmanager,pj:Taskname,checkmm:"Checkmm"}),
							dataType: "json",
							beforeSend: function() {
								$("#selTypeRiskAllaa").html("");
							},
							success: function(json){
								$.each(json, function(index, value) {
								$("#selTypeRiskAllaa").append('<option value="' + value.MemberProjectID + '">' + value.EmployeeFullName + '</option>');
										});
									}
								});
							});
								
  /// End Script select//
////////////////End Page Add_tasks///////////////////
//////////////// Page editeProject//////////////////////
$(document).on('click', '.hideok', function () {
    window.location.href = "editeProject.php"
});
var Taskpoid = '';
var AssignTaskPoID = '';
var employeeID = '';
var AssignTaskPoName = '';
$(document).on('click', '#deletePM', function () {
    Taskpoid = $(this).attr("name");
    AssignTaskPoID = $(this).attr("value");
    AssignTaskPoName = $(this).attr("data");
    employeeID = $(this).attr("idname");
    $.ajax({
        url: "View_task.php",
        method: "POST",
        data: ({ taskid: Taskpoid, taskaction: 'checkpj', employeeID: AssignTaskPoID, AssignTaskPoName: AssignTaskPoName }),
        dataType: "json",
        beforeSend: function () {
            $("#datasubtask").html("");
            $("#datasubtaskmm").html("");
        },
        success: function (json) {
            if (json != "0") {
                document.getElementById("mmdelete").innerHTML = AssignTaskPoName;
                $.each(json, function (index, value) {
                    if (value.AssignTaskPoPosition == "Task-Manager") {
                        $("#datasubtask").append('<div class="card border  border-primary">' +
                            '<div class="card-block">' +
                            '<h4 class="card-title">งานชื่อ : ' + value.TaskPoName + '</h4>' +
                            '<p class="card-text">' +
                            'จำเป็นต้องเลือกผู้รับผิดชอบงานแทนก่อน!!!' +
                            '<input type="hidden" name="deletetmid[]" value="' + value.MemberProjectID + '">' +
                            '<input type="hidden" name="Taskpoid[]" value="' + value.TaskPoID + '">' +
                            '<input type="hidden" name="ProjectID[]" value="' + value.ProjectID + '">' +
                            '<input type="hidden" name="AssignTaskPoID[]" value="' + value.AssignTaskPoID + '">' +
                            '<select class="form-control"  id="changmember' + index + '" name="changmember[]"> </select>' +
                            '</p>' +
                            '</div>' +
                            '</div>');
                        $('#changmember' + index + '').ready(function () {
                            $.ajax({
                                url: "view_member.php",
                                data: ({ ProjectID: Taskpoid, pj: employeeID, checkmm: "Checkmmpj" }),
                                dataType: "json",
                                beforeSend: function () {
                                    $('#changmember' + index + '').html("");
                                },
                                success: function (json1) {
                                    $.each(json1, function (indexs, valuee) {
                                        $('#changmember' + index + '').append('<option value="' + valuee.MemberProjectID + '">' + valuee.EmployeeFullName + '</option>');
                                    });
                                }
                            });
                        });
                    }

                });
                $.each(json, function (index, value) {
                    if (value.AssignTaskPoPosition == "Task-Member") {
                        $("#datasubtask").append('<div class="card border  border-primary">' +
                            '<div class="card-block">' +
                            '<h4 class="card-title">มีหน้าที่รับผิดชอบงานชื่อ : ' + value.TaskPoName + '</h4>' +
                            '<p class="card-text">' +
                            'ชื่อพนักงาน : <b> ' + value.EmployeeFullName + '</b><br>  ตำแหน่งงาน :  สมาชิกงาน' +
                            '<input type="hidden" name="AssignTaskPoIDmm[]" value="' + value.AssignTaskPoID + '">' +
                            '<input type="hidden" name="TaskPoIDmm[]" value="' + value.TaskPoID + '">' +
                            '<input type="hidden" name="deletetmid[]" value="' + value.MemberProjectID + '">' +
                            '<input type="hidden" name="ProjectID[]" value="' + value.ProjectID + '">' +
                            '</p>' +
                            '</div>' +
                            '</div>');
                    }

                });
                $.each(json, function (index, value) {
                    if (value.AssignTaskPosition == "Task-SubManager") {
                        $("#datasubtask").append('<div class="card border  border-primary" style="width: 90%;right: -10%;">' +
                            '<div class="card-block">' +
                            '<h4 class="card-title">งานย่อยชื่อ : ' + value.TaskName + '</h4>' +
                            '<p class="card-text">' +
                            'จำเป็นต้องเลือกผู้รับผิดชอบงานแทนก่อน!!!' +
                            '<input type="hidden" name="AssignTaskID[]" value="' + value.AssignTaskID + '">' +
                            '<input type="hidden" name="TaskID[]" value="' + value.TaskID + '">' +
                            '<select class="form-control"  id="changmember' + index + '" name="changmembertsm[]"> </select>' +
                            '<input type="hidden" name="deletetmid[]" value="' + value.MemberProjectID + '">' +
                            '<input type="hidden" name="ProjectID[]" value="' + Taskpoid + '">' +
                            '</p>' +
                            '</div>' +
                            '</div>');
                        $('#changmember' + index + '').ready(function () {
                            $.ajax({
                                url: "view_member.php",
                                data: ({ subject_id: value.TaskPoID, pj: value.AssignTaskPoID, checkmm: "Check" }),
                                dataType: "json",
                                beforeSend: function () {
                                    $('#changmember' + index + '').html("");
                                },
                                success: function (json1) {
                                    $.each(json1, function (indexs, valuee) {
                                        $('#changmember' + index + '').append('<option value="' + valuee.AssignTaskPoID + '">' + valuee.EmployeeFullName + '</option>');
                                    });
                                }
                            });
                        });
                    }

                });
                $.each(json, function (index, value) {
                    if (value.AssignTaskPosition == "Task-SubMember") {
                        $("#datasubtask").append('<div class="card border  border-primary"  style="width: 90%;right: -10%;">' +
                            '<div class="card-block">' +
                            '<h4 class="card-title">มีหน้าที่รับผิดชอบงานย่อยชื่อ : ' + value.TaskName + '</h4>' +
                            '<p class="card-text">' +
                            'ชื่อพนักงาน : <b> ' + value.EmployeeFullName + '</b><br>  ตำแหน่งงาน :  สมาชิกงานย่อย' +
                            '<input type="hidden" name="AssignTaskIDmm[]" value="' + value.AssignTaskID + '">' +
                            '<input type="hidden" name="TaskIDmm[]" value="' + value.TaskID + '">' +
                            '<input type="hidden" name="deletetmid[]" value="' + value.MemberProjectID + '">' +
                            '<input type="hidden" name="ProjectID[]" value="' + Taskpoid + '">' +
                            '</p>' +
                            '</div>' +
                            '</div>');
                    }

                });
                $('#changTM').modal('show');
                $(".select2-primary").css("position", "sticky");
                $(".select2-primary").css("width", "100%");
            }
            else {
                document.getElementById("mmdeletee").innerHTML = AssignTaskPoName;
                $("#checkpoid").append('<div id="deletetmm" name="' + Taskpoid + '" value="' + AssignTaskPoID + '"></div>');
                $('#changMM').modal('show');
                $(".select2-primary").css("position", "sticky");
                $(".select2-primary").css("width", "100%");
            }
        }
    });
});
$(document).on('click', '.deletemm', function () {
    var TaskPoID = $('#deletetmm').attr("name");
    var AssignTaskPoID = $('#deletetmm').attr("value");
    $.ajax({
        url: "View_task.php",
        method: "POST",
        data: ({ taskid: TaskPoID, taskaction: 'deletetmmpj', AssignTaskPoID: AssignTaskPoID }),
        dataType: "json",
        success: function (json) {
            $('#changMM').modal('hide');
            $('#madaldeleteok').modal('show');
            $(".select2-primary").css("position", "sticky");
            $(".select2-primary").css("width", "100%");
        }
    });
});
////////////////End Page editeProject///////////////////
//////////////// Page editeSubtasks/////////////////////
////delete PM PMM/////
            var Taskpoid='';
            var AssignTaskPoID='';
            $(document).on('click', '#deletePM', function(){  
                    Taskpoid = $(this).attr("name"); 
                    AssignTaskPoID = $(this).attr("value"); 
                    AssignTaskPoName = $(this).attr("data"); 
                    $.ajax({
										url: "View_subtask.php",
                    method:"POST", 
										data:({taskid: Taskpoid,taskaction:'deletetaskPM',AssignTaskPoID: AssignTaskPoID, AssignTaskPoName:AssignTaskPoName}),
										dataType: "json",
										success: function(json){
                        $('#madaldeleteok').modal('show');  
                        $(".select2-primary").css("position","sticky");  
                        $(".select2-primary").css("width","100%"); 
										}
									});
								});

                $(document).on('click', '.deletetask', function(){  
                      $('#madaldeletePM').modal('hide');  
									$.ajax({
										url: "View_subtask.php",
                    method:"POST", 
										data:({taskid: deletetask,taskaction:'deletetask'}),
										dataType: "json",
										success: function(json){
                        $('#madaldeleteok').modal('show');  
                        $(".select2-primary").css("position","sticky");  
                              $(".select2-primary").css("width","100%");  
                                        
										}
									});
								});
                
                $(document).on('click', '.deleok', function(){  
                  window.location.href="editeSubTasks.php" 
								});
                $(document).on('click', '.hideok', function(){  
                  window.location.href="editeSubTasks.php" 
								});
                $(document).on('click', '.editeeok', function(){  
                  window.location.href="MySubTasks.php" 
								});
             /// end delete PM PMM ////
               /////Script select/////
        $('#Taskmanager').ready(function() {
           var Taskname = $('#Tasktm').attr("name");
       var  Taskmanager =  $('#Taskmanager').val();
							$.ajax({
            url: "AjaxSubTasks.php",
							data: ({subject_id: Taskmanager,pj:Taskname}),
        dataType: "json",
							beforeSend: function() {
            $("#selTypeRiskAllaa").html("");
        },
							success: function(json){
            $.each(json, function (index, value) {
                $("#selTypeRiskAllaa").append('<option value="' + value.AssignTaskPoID + '" hidden>' + value.EmployeeFullName + '</option>');
            });
        }
    });
});

							$('#Taskmanager').change(function() {
                var Taskmanager =  $('#Taskmanager').val();
        var Taskname = $('#Tasktm').attr("name");
							$.ajax({
            url: "AjaxSubTasks.php",
              data: ({subject_id: Taskmanager,pj:Taskname}),
                      dataType: "json",
							beforeSend: function() {
            $("#selTypeRiskAllaa").html("");
        },
							success: function(json){
            $.each(json, function (index, value) {
                $("#selTypeRiskAllaa").append('<option value="' + value.AssignTaskPoID + '" hidden>' + value.EmployeeFullName + '</option>');
            });
        }
    });
});
								$('#Taskmanager').ready(function() {
            MemberProjectID = $('#Taskmanager').val();
        $.ajax({
            url: "AjaxSubTasks.php",
										data:({subject_id: MemberProjectID,}),
        dataType: "json",
										beforeSend: function() {
            $("#selTypeRiskAllaa").html("");
        },
										success: function(json){
            $("#selTypeRiskAllaa").html("");
        $.each(json, function(index, value) {
            $("#selTypeRiskAllaa").append('<option value="' + value.AssignTaskPoID + '" hidden>' + value.EmployeeFullName + '</option>');
        });
    }
});
});
								$('#selTypeRiskAll').change(function() {
            MemberProjectID = $('#selTypeRiskAll').val();
        $.ajax({
            url: "AjaxSubTasks.php",
										data:({subject_id: MemberProjectID,}),
        dataType: "json",
										beforeSend: function() {
            $("#selTypeRiskAllaa").html("");
        },
										success: function(json){
            $("#selTypeRiskAllaa").html("");
        $.each(json, function(index, value) {
            $("#selTypeRiskAllaa").append('<option value="' + value.AssignTaskPoID + '" hidden>' + value.EmployeeFullName + '</option>');
        });
    }
});
});
////////////////End Page editeSubtasks//////////////////
//////////////// Page editetasks///////////////////////
  /////delete PM PMM////
            var Taskpoid='';
            var AssignTaskPoID='';
            var employeeID='';
            var AssignTaskPoName='';
            $(document).on('click', '#deletePM', function(){  
                    Taskpoid = $(this).attr("name"); 
                    AssignTaskPoID = $(this).attr("value"); 
                    AssignTaskPoName = $(this).attr("data"); 
                    employeeID = $(this).attr("idname"); 
                    $.ajax({
										url: "View_task.php",
                    method:"POST", 
										data:({taskid: Taskpoid,taskaction: 'checkmm',employeeID: employeeID, AssignTaskPoName:AssignTaskPoName}),
										dataType: "json",
                    beforeSend: function() {
                                    $("#datasubtask").html("");
                                    $("#datasubtaskmm").html("");
                                  },
										success: function(json){
                      if(json!="0"){ 
                        document.getElementById("mmdelete").innerHTML = AssignTaskPoName;
                         $.each(json, function(index, value)
                          {
                             if(value.AssignTaskPosition=="Task-SubManager"){
                              $("#datasubtask").append('<div class="card border  border-primary">'+
                                        '<div class="card-block">'+
                                          '<h4 class="card-title">งานย่อยชื่อ : '+value.TaskName+'</h4>'+
                                          '<p class="card-text">'+
                                          'จำเป็นต้องเลือกผู้รับผิดชอบงานแทนก่อน!!!'+
                                          '<input type="hidden" name="deletetmid[]" value="'+value.AssignTaskPoID+'">'+
                                          '<input type="hidden" name="Taskpoid[]" value="'+value.TaskPoID+'">'+
                                          '<input type="hidden" name="TaskID[]" value="'+value.TaskID+'">'+
                                          '<input type="hidden" name="AssignTaskID[]" value="'+value.AssignTaskID+'">'+
                                          '<select class="form-control"  id="changmember'+index+'" name="changmember[]"> </select>'+
                                          '</p>'+
                                        '</div>'+
                                      '</div>');
                             $('#changmember'+index+'').ready(function() {
                                  $.ajax({
                                  url: "view_member.php",
                                  data: ({subject_id:Taskpoid,pj:AssignTaskPoID,checkmm:"Check"}),
                                  dataType: "json",
                                  beforeSend: function() {
                                    $('#changmember'+index+'').html("");
                                  },
                                  success: function(json1){
                                    $.each(json1, function(indexs, valuee) {
                                    $('#changmember'+index+'').append('<option value="'+valuee.AssignTaskPoID +'">'+valuee.EmployeeFullName+'</option>');
                                        });
                                      }
                                    });
                            });
                             }

                          });
                          $.each(json, function(index, value)
                          {
                             if(value.AssignTaskPosition!="Task-SubManager"){
                              $("#datasubtask").append('<div class="card border  border-primary">'+
                                        '<div class="card-block">'+
                                          '<h4 class="card-title">มีหน้าที่รับผิดชอบงานย่อยชื่อ : '+value.TaskName+'</h4>'+
                                          '<p class="card-text">'+
                                          'ชื่อพนักงาน : <b> '  +value.EmployeeFullName+ '</b><br>  ตำแหน่งงาน :  สมาชิกงานย่อย'+
                                          '<input type="hidden" name="TaskIDmm[]" value="'+value.TaskID+'">'+
                                          '<input type="hidden" name="AssignTaskIDmm[]" value="'+value.AssignTaskID+'">'+
                                          '<input type="hidden" name="deletetmid[]" value="'+value.AssignTaskPoID+'">'+
                                          '<input type="hidden" name="Taskpoid[]" value="'+value.TaskPoID+'">'+
                                          '</p>'+
                                        '</div>'+
                                      '</div>');
                             }

                          });
                            $('#changTM').modal('show');  
                        $(".select2-primary").css("position","sticky");  
                        $(".select2-primary").css("width","100%"); 
                       }
                      else{
                        document.getElementById("mmdeletee").innerHTML = AssignTaskPoName;
                        $("#checkpoid").append('<div id="deletetmm" name="'+Taskpoid+'" value="'+AssignTaskPoID+'"></div>');
                        $('#changMM').modal('show');  
                        $(".select2-primary").css("position","sticky");  
                        $(".select2-primary").css("width","100%"); 
                      }             
										}
									});
								});

                $(document).on('click', '.deletetask', function(){  
                      $('#madaldeletePM').modal('hide');  
									$.ajax({
										url: "View_task.php",
                    method:"POST", 
										data:({taskid: deletetask,taskaction:'deletetask'}),
										dataType: "json",
										success: function(json){
                        $('#madaldeleteok').modal('show');  
                                        
										}
									});
								});
                
                $(document).on('click', '.hideok', function(){  
                  window.location.href="editeTasks.php" 
                });
                
                $(document).on('click', '.EditTasksuccessok', function(){ 
                  window.location.href="MyTasks.php" 
                });
                
                $(document).on('click', '.deletemm', function(){ 
                        var TaskPoID = $('#deletetmm').attr("name"); 
                        var AssignTaskPoID = $('#deletetmm').attr("value"); 
                    $.ajax({
                    url: "View_task.php",
                    method:"POST", 
                    data: ({taskid: TaskPoID,taskaction: 'deletetaskPM', AssignTaskPoID:AssignTaskPoID}),
                    dataType: "json",
                    success: function(json){
                      $('#changMM').modal('hide');  
                      $('#madaldeleteok').modal('show');  
                      $(".select2-primary").css("position","sticky");  
                        $(".select2-primary").css("width","100%"); 
                        }
                      });
								});
             ////end delete PM PMM/////
              /////Script select////
        $('#Taskmanager').ready(function() {
           var Taskname = $('#Tasktm').attr("name");
       var  Taskmanager =  $('#Taskmanager').val();
							$.ajax({
            url: "view_member.php",
							data: ({subject_id: Taskmanager,pj:Taskname,checkmm:"selectmm"}),
        dataType: "json",
							beforeSend: function() {
            $("#selTypeRiskAllaa").html("");
        },
							success: function(json){
            $.each(json, function (index, value) {
                $("#selTypeRiskAllaa").append('<option value="' + value.MemberProjectID + '" hidden>' + value.EmployeeFullName + '</option>');
            });
        }
    });
});

							$('#Taskmanager').change(function() {
                var Taskmanager =  $('#Taskmanager').val();
        var Taskname = $('#Tasktm').attr("name");
							$.ajax({
            url: "view_member.php",
              data: ({subject_id: Taskmanager,pj:Taskname,checkmm:"selectmm"}),
                      dataType: "json",
							beforeSend: function() {
            $("#selTypeRiskAllaa").html("");
        },
							success: function(json){
            $.each(json, function (index, value) {
                $("#selTypeRiskAllaa").append('<option value="' + value.MemberProjectID + '">' + value.EmployeeFullName + '</option>');
            });
        }
    });
});
								$('#Taskmanager').ready(function() {
            MemberProjectID = $('#Taskmanager').val();
        $.ajax({
            url: "view_member.php",
										data:({subject_id: MemberProjectID,}),
        dataType: "json",
										beforeSend: function() {
            $("#selTypeRiskAllaa").html("");
        },
										success: function(json){
            $("#selTypeRiskAllaa").html("");
        $.each(json, function(index, value) {
            $("#selTypeRiskAllaa").append('<option value="' + value.MemberProjectID +
                '">' + value.EmployeeFullName + '</option>');
        });
    }
});
});
								$('#selTypeRiskAll').change(function() {
            MemberProjectID = $('#selTypeRiskAll').val();
        $.ajax({
            url: "view_member.php",
										data:({subject_id: MemberProjectID,}),
        dataType: "json",
										beforeSend: function() {
            $("#selTypeRiskAllaa").html("");
        },
										success: function(json){
            $("#selTypeRiskAllaa").html("");
        $.each(json, function(index, value) {
            $("#selTypeRiskAllaa").append('<option value="' + value.MemberProjectID +
                '">' + value.EmployeeFullName + '</option>');
        });
    }
});
});
////////////////End Page editetasks////////////////////
//////////////// Page header//////////////////////////
    $(document).on('click', '.logoutbtn', function() {
        $("#madallogout").modal('show');
    $(".select2-success").css("position","sticky");
    $(".select2-success").css("width","100%");
    $(".select2-primary").css("position","sticky");
    $(".select2-primary").css("width","100%");
  });
                        $(document).on('click', '.logoutok', function(){
        $("#madallogout").modal('hide');
    window.location.href="./index.php"
                  });
        setTimeout(function() {
            window.location.href = "./index.php?event=logout"
        },601000);
////////////////End Page header///////////////////////
//////////////// Page mysubtasks///////////////////////////
    var deletetask='';
            $(document).on('click', '.delete', function(){
        deletetask = $(this).attr("id");
    $('#madaldelete').modal('show');
              });

                $(document).on('click', '.deletetask', function(){
        $('#madaldelete').modal('hide');
    $.ajax({
        url: "View_subtask.php",
method:"POST",
										data:({taskid: deletetask,taskaction:'deletetask'}),
    dataType: "json",
										success: function(json){
        $('#madaldeleteok').modal('show');

    }
});
});

                $(document).on('click', '.hideok', function(){
        window.location.href = "MySubTasks.php"
    });
////////////////End Page mysubtasks////////////////////////
//////////////// Page mytasks/////////////////////////////
var deletetask = '';
$(document).on('click', '.delete', function () {
    deletetask = $(this).attr("id");
    $('#madaldelete').modal('show');
});

$(document).on('click', '.deletetask', function () {
    $('#madaldelete').modal('hide');
    $.ajax({
        url: "View_task.php",
        method: "POST",
        data: ({ taskid: deletetask, taskaction: 'deletetask' }),
        dataType: "json",
        success: function (json) {
            $('#madaldeleteok').modal('show');
        }
    });
});

$(document).on('click', '.hideok', function () {
    window.location.href = "MyTasks.php"
});
////////////////End Page mytasks//////////////////////////
//////////////// Page subtask_total///////////////////////
var deletetask = '';
$(document).on('click', '.delete', function () {
    deletetask = $(this).attr("id");
    $('#madaldelete').modal('show');
});

$(document).on('click', '.deletetask', function () {
    $('#madaldelete').modal('hide');
    $.ajax({
        url: "View_subtask.php",
        method: "POST",
        data: ({ taskid: deletetask, taskaction: 'deletetask' }),
        dataType: "json",
        success: function (json) {
            $('#madaldeleteok').modal('show');

        }
    });
});

$(document).on('click', '.hideok', function () {
    window.location.href = "SubTask_Total.php"
});
////////////////End Page subtask_total////////////////////