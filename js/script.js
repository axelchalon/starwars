










function toURLable (str)
{
    return str.toLowerCase().replace(/ /,'');
}


var x2js = new X2JS();
          
var app = angular.module('App',['ngRoute']);




app.config(['$routeProvider', '$locationProvider', function($routeProvider,$locationProvider){
    $locationProvider.html5Mode(true); // http://stackoverflow.com/questions/11095179/using-html5-pushstate-on-angular-js
    $routeProvider  .when('/', { templateUrl: 'templates/home.html', controller: 'LandingCtrl' })
                    .when('/special/calendar', { templateUrl: 'templates/showCalendar.html', controller: 'ShowCtrl' })
                    .when('/special/c3po', { templateUrl: 'templates/showC3PO.html', controller: 'ShowCtrl' })
                    .when('/character/:name', { templateUrl: 'templates/showCharacter.html', controller: 'ShowCtrl' })
                    .when('/weapon/:name', { templateUrl: 'templates/showWeapon.html', controller: 'ShowCtrl' })
                    // .when('/planet/kamino', { templateUrl: 'templates/showPlanet2.html', controller: 'ShowCtrl' })
                    .when('/planet/:name', { templateUrl: 'templates/showPlanet2.html', controller: 'ShowCtrl' })
                    .otherwise ( {templateUrl: 'templates/404.html'} );
                  // /character/anakinskywalker
    
}]);

// @todo lien actif

app.controller('MainCtrl',function($scope,$http,$q,$location){
    
    if (typeof localStorage['hideVotes'] == 'undefined')
        $scope.showVotes = true;
    else
        $scope.showVotes = false;
    
    $scope.voteleft = function(){
        $http.get('do.php', {params: {method: 'vote', id: 0}}).success(function(data){
        });
        alert('Votre vote a bien été pris en compte !\n\n'); $scope.showVotes = false; localStorage['hideVotes'] = true;
    }
    
    $scope.voteRight = function(){
        $http.get('do.php', {params: {method: 'vote', id: 1}}).success(function(data){
        });
        alert('Votre vote a bien été pris en compte !\n\n'); $scope.showVotes = false; localStorage['hideVotes'] = true;
    }

    
    $scope.itemList = [];
    $scope.getItemListPromise = $http.get('do.php', {params: {method: 'getItemList'}});
    
    $scope.getItemListPromise.then(function(data){
        $scope.itemList = data.data; // @todo getlastunlockedp our le localstorage
    });
    $scope.itemListFilters = { character: true, planet: true, weapon: true };
    
    
    $scope.currentItem = -1;
    
    $scope.showItemByName = function(name,locked)
    {
        if (locked) { return; }
        $http.get('do.php', {params: {method: 'getItemByName', name: name}}).success(function(data){
            $scope.currentItem = data;
        });
        
        // $scope.currentItem = $scope.itemList[id]; // retrieve++ en vrai
    }
    
    // $scope.showItem(3,false);
        
    
    $scope.itemListFilter = function(item) {
        return ($scope.itemListFilters[item.type] === true)    
    }
    
    /*
     $scope.itemListFilter = function(items) {
        console.log(items);
            console.log($scope.itemListFilters);
            var ret = [];
            for (var i = 0; i < items; i++)
            {
                console.log(items[i].type);
                console.log($scope.itemListFilters[items[i].type]);
                if ($scope.itemListFilters[items[i].type] === true)
                ret.push(items[i]);
        }
        
        
        return ret;
          return [{isLocked: false, name: 'C1', type: 'character'}];
    }
    */
               
   
    // fonction en filter:fn est appelée à chaque item et doit renvoyer true ou false
    // filtre | maFn reçoit tous les items en un bloc et renvoie items filtré
});

app.controller('ShowCtrl',function($scope,$http,$q,$location,$routeParams){
    
    $scope.showItemByName($routeParams.name);
    window.sr = new scrollReveal();

});

app.controller('LandingCtrl',function($scope,$location){
    
    console.log($scope.getItemListPromise);
    $scope.getItemListPromise.then(function(data){
        var itemList = data.data;
       
        var lastUnlockedUrl;
        for (var i = 0; i<itemList.length; i++)
        {
            if (!itemList[i].locked)
            {
                lastUnlockedUrl=itemList[i].type+'/'+toURLable(itemList[i].name);
            }
        }
        $location.path('/'+lastUnlockedUrl);
    });
});

app.filter('itemListFilter2', function () { 
   return function(items,showDay,showNight) {
       
      var ret = [];
      for (var i = 0; i<items.length; i++)
      {
          if (showDay && items[i].id%2 == 0 || showNight && items[i].id%2 == 1)
              ret.push(items[i]);
      }
       return ret;
   };
});

app.filter('toURLableFilter', function () { 
   return toURLable;
});





























$(document).scroll(function(){
    return;
            // $('header').animate({height: Math.max(50,250-$(document).scrollTop())},'linear');
            if ($(document).scrollTop()>90)
                $('nav').addClass('collapsed');
            else
                $('nav').removeClass('collapsed');
            
            /*$('section > a').each(function(){
                $(this).css({marginTop: 300-Math.min(300,Math.abs($(this).offset().top+$(this).height()/2 - ($(window).scrollTop()+$(window).height()/2)))});
            });*/
});