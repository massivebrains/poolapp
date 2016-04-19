
app = angular.module("app", []);
var site_url = 'http://localhost/poolapp/index.php/';


app.controller("gameCtrl", function($scope, $http)
{

    $scope.toggleGame = function(number, week_number)
    {
      //console.log(number+' '+week_number);
        $http.get(site_url+'admin/game/toggle_game/'+number+'/'+week_number)
        .success(function(data)
        {
           //console.log(data); 
           $('#'+number).prop('disabled', true);
        }).error(function(data)
        {
            console.log(data);
        });

    }

    $('#submitGame').click(function($event)
    {
        $event.preventDefault();

    });

    $scope.startResult = function()
    { 
        for(i = 1; i<=49; i++){
            current = $('#n'+i);
            if(current.prop('disabled') == true){
                $('#n'+i).prop('disabled', false);
            }
        }
    };

    $scope.submitResult = function($event)
    {
        $event.preventDefault();
        for (i = 1; i<=49; i++)
        {
            current = $('#n'+i);
            if (current.prop('disabled') == true)
            {
                $('#n'+i).removeClass('btn-danger').addClass('btn-black').prop('disabled', false);
            }
        }
        $('#choosen').empty(); $('#stack').val('');
        toastr.options = {progressBar: true, timeOut:7000};
        toastr.info(' Result Posted');  
    };


    $scope.start = function()
    {
        $('#couponHolder').hide();
        setInterval(function(){
            count = $('#choosen').children().length;
            if ((count < 3))
            {
                $('#submit').prop('disabled', true);
            }
            else
            {
                $('#submit').addClass('btn-warning');
                if ($('#stack').val() == '')
                {
                    $('#submit').prop('disabled', true);
                }
                else
                {
                    $('#submit').removeClass('btn-warning').addClass('btn-success');
                    $('#submit').prop('disabled', false);
                }
            } 
        }, 1000);
        for (i = 1; i<=49; i++)
        {
            current = $('#n'+i);
            if (current.prop('disabled') == true)
            {
                $('#n'+i).prop('disabled', false);
            }
        }
    };



    $scope.selectNumber = function(number)
    {
        //console.log(number);
        $('#n'+number).removeClass('btn-black').addClass('btn-danger');
        $('#n'+number).prop('disabled', true);
        $('#choosen').append('<button class="btn btn-sm btn-danger" style="margin-bottom:5px;" id="'+number+'" ng-click="removeNumber('+number+')">'+number+'</button>&nbsp;');
    };

    $scope.removeNumber = function(number)
    {
        $('#'+number).remove();
        count = $('#choosen').children().length;
        if (count < 3)
            $('#submit').removeClass('btn-warning').removeClass('btn-success');
        choosen = $('#choosen').html();
        //console.log(choosen);
        $('#n'+number).removeClass('btn-danger').addClass('btn-black').prop('disabled', false);
        alert()
    };

    $scope.submit = function(e)
    {
        e.preventDefault();
        for (i = 1; i<=49; i++)
        {
            current = $('#n'+i);
            if (current.prop('disabled') == true)
            {
                $('#n'+i).removeClass('btn-danger').addClass('btn-black').prop('disabled', false);
            }
        }
        $('#choosen').empty(); $('#stack').val('');
        toastr.options = {progressBar: true, timeOut:7000};
        $('#submit').removeClass('btn-success');
        toastr.info('SMS Sent to 09087657645', ' Game Played Successfully');
        $('#couponHolder').html('<h1 class="text-center semi-bold"><sup><small class="semi-bold">Coupon ID</small></sup>4958574</h1>');
        $('#couponHolder').fadeIn(3000).fadeOut(6500);
        
    };

    $scope.check = function($event){
        if(confirm('Are you sure?') == false){
            $event.preventDefault();
        }
    }


});




