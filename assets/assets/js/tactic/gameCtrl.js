
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
   $scope.odd = 'default';

   $scope.totalStake = 0;
   setInterval(function()
   {
        $http.get(site_url+'agent/index/get_total_stake/')
        .then(function successCallback(response) 
        {
            console.log(response.data);
            $scope.totalStake = response.data;
        }, function errorCallback(response) 
        {
            console.log(response.data);
        });
   },5000);

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

    $scope.sortNumber = function(a,b) 
    {
        return a - b;
    }


    $scope.reset = function($event)
    {
        $event.preventDefault();
        $('#choosen').html('');
        $('#submit').prop('disabled', true).removeClass('btn-warning').removeClass('btn-success');
        $('#stake').val('');
        $scope.games = [];
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
        $scope.games.sort($scope.sortNumber);
        var game = $scope.games.toString();
        $http.get(site_url+'agent/game/post/'+game+'/'+$scope.stake+'/'+$scope.odd)
        .then(function successCallback(response) 
        {
            console.log(response.data);
            if(response.data == -1)
                window.location.href = window.location.href;
            console.log(game);
            console.log($scope.stake);
            console.log($scope.odd);
        }, function errorCallback(response) 
        {
            console.log(response.data);
            console.log(game);
            console.log($scope.stake);
            console.log($scope.odd);
        });
        for (i = 1; i<=49; i++)
        {
            current = $('#n'+i);
            if (current.prop('disabled') == true)
            {
                $('#n'+i).removeClass('btn-danger').addClass('btn-black').prop('disabled', false);
            }
        }
        $scope.games = [];
        $('#choosen').empty(); $('#stake').val('');
        toastr.options = {timeOut:3000};
        $('#submit').removeClass('btn-success');
        toastr.info('Game Played Successfully');

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




