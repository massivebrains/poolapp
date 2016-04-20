
app = angular.module("app", []);
var site_url = 'http://localhost/poolapp/index.php/';


app.controller("gameCtrl", function($scope, $http)
{

    /* ************************************** ADMIN FUNCTIONS **************************************** */
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

   /* ******************************************************** END OF ADMIN FUNCTINOS ************************ */

   /* ************************************************ AGENT FUNCTIONS ************************************ */

   $scope.start = function()
   {
    $('#couponHolder').hide();
    $scope.games = [];
    setInterval(function(){
        count = $('#choosen').children().length;
        stake = $('#stake').val();
        if (count < 3)
        {
            $('#submit').prop('disabled', true);
        }
        else
        {
            $('#submit').addClass('btn-warning');
            if (stake == '')
            {
                $('#submit').prop('disabled', true);
            }
            else
            {
                $('#submit').removeClass('btn-warning').addClass('btn-success');
                $('#submit').prop('disabled', false);
            }
        } 
    }, 1500);        
    for (i = 1; i<=49; i++)
    {
        current = $('#n'+i);
        if (current.prop('disabled') == true)
            $('#n'+i).prop('disabled', false);
    }
};



$scope.selectNumber = function(number)
{
        //console.log(number);
        $('#n'+number).removeClass('btn-black').addClass('btn-danger');
        $('#n'+number).prop('disabled', true);
        $('#choosen').append('<button class="btn btn-sm btn-danger" style="margin:5px;" id="'+number+'">'+number+'</button>');
        $scope.games.push(number);
    };


    $scope.reset = function($event)
    {
        $event.preventDefault();
        $('#choosen').html('');
        $('#submit').prop('disabled', true).removeClass('btn-warning').removeClass('btn-success');
        $('#stake').val('');
        for (i = 1; i<=49; i++)
        {
            current = $('#n'+i);
            if (current.prop('disabled') == true)
                $('#n'+i).removeClass('btn-danger').addClass('btn-black').prop('disabled', false);
        }
    }

    $scope.submit = function($event)
    {
        
        $event.preventDefault();
        $scope.games.sort(); 
        console.log($scope.games.toString()); 
        var game = $scope.games.toString();
        $http.get(site_url+'agent/game/post/'+game+'/'+$scope.stake)
        .then(function successCallback(response) 
        {
            console.log(response);
        }, function errorCallback(response) 
        {
            console.log(response);
        });
        $scope.csrf="<?=$csrf['hash'];?>";
        console.log($scope.csrf);
        
        for (i = 1; i<=49; i++)
        {
            current = $('#n'+i);
            if (current.prop('disabled') == true)
            {
                $('#n'+i).removeClass('btn-danger').addClass('btn-black').prop('disabled', false);
            }
        }

        $('#choosen').empty(); $('#stake').val('');
        toastr.options = {progressBar: true, timeOut:7000};
        $('#submit').removeClass('btn-success');
        toastr.info('Game Played Successfully');
        $('#couponHolder').html('<h1 class="text-center semi-bold"><sup><small class="semi-bold">Coupon ID</small></sup>4958574</h1>');
        $('#couponHolder').fadeIn(3000).fadeOut(6500);
        //console.log($scope.games);

    };


    /**************************************** END OF AGENT FUNCTIONS *****************************************/


    /*************************************** OTHERS ***********************************************************/

    $scope.check = function($event){
        if(confirm('Are you sure?') == false){
            $event.preventDefault();
        }
    }
    /****************************************** END OF OTHERS **************************************************/


});




