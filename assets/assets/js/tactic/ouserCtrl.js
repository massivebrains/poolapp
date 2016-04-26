
app = angular.module("app", []);
var site_url = 'http://localhost/poolapp/index.php/';


app.controller("ouserCtrl", function($scope, $http, $location)
{

 

   $scope.start = function() 
   {
    $scope.games = []; $scope.odd = 'default';
    setInterval(function(){
        stake = $('#stake').val();
        if ($scope.games.length < 3)
        {
            $('#submit').prop('disabled', true);
        }
        else
        {
            if (stake < 100)
            {
                $('#submit').prop('disabled', true);
            }
            else
            {
                $('#submit').prop('disabled', false);
            }
        } 
    }, 1500);
};



    $scope.select = function(number)
    {
        //console.log(number);
        $('#'+number).prop('disabled', true);
        $scope.games.push(number);
    }

    $scope.sortNumber = function(a,b) 
    {
        return a - b;
    }


    $scope.reset = function($event)
    {
        $event.preventDefault();
        $('#submit').prop('disabled', true);
        $('#stake').val('');
        $scope.games = [];
        for (i = 1; i<=49; i++)
        {
            current = $('#'+i);
            if (current.prop('disabled') == true)
                $('#'+i).prop('disabled', false);
        }
    }

    $scope.submit = function($event)
    {
        
        $event.preventDefault();
        $scope.games.sort($scope.sortNumber);
        var game = $scope.games.toString();
        $http.get(site_url+'public/ouser/play/'+game+'/'+$scope.stake+'/'+$scope.odd)
        .then(function successCallback(response) 
        {
            console.log(response.data);
            if(response.data == -1)
                window.location.reload();
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
            current = $('#'+i);
            if (current.prop('disabled') == true)
            {
                $('#'+i).prop('disabled', false);
            }
        }
        $scope.games = [];
        alert('Your bet has been placed');
        window.location.href = window.location.href;
        $('#submit').prop('disabled', true);
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




