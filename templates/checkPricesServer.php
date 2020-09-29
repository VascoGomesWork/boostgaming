<?php
function calcDiference(desiredRank, currentRank){
        return desiredRank - currentRank;
    }

function checkIsEven(numRank){
    if(numRank % 2 == 0){
           return 1;
           }
            else
                return 2;
}
    
    function devidRanks(numRank){
        $lowRank = 0;
        $mediumRank = 0;
        $highRank = 0;
        $rankArray = [];
        
        //checks if the num of ranks is even or not
        $isEven = checkIsEven(numRank);
        
        //REVIEW FUNCTION
        do{
            
              if((lowRank == highRank)){
                  lowRank += 1;
                  highRank += 1;
                  mediumRank += 1;
                }  
            
                if(lowRank + mediumRank + highRank > numRank){
                        mediumRank = mediumRank - isEven;
                    }
                  /*if(lowRank + mediumRank + highRank != numRank - isEven){
                        mediumRank += 1;
                    }*/
 
        }while((lowRank + mediumRank + highRank != numRank));
            
        /*lowRank = 7;
        mediumRank = 5;
        highRank = 7;*/
        rankArray = [lowRank, mediumRank, highRank];
         
        return rankArray;
    }
    
    function getLevels(currentRank, numRank){
        $i = 0;
        $levels =[];
        
        //gets the levels to the array levels
        do{
            
            //gets the numbers from the correspondent ranks out of the array
            levels[i] = [document.getElementById("currentRank").options.item(i).value];
            i++;
        }while(numRank != i);
        
        return levels;
    }
    
    function levelAndCategories(indexLevels, hightRank, smallRank, mediumRank, numRank){
        
        $i = 0;
        $counter = 0;
        $k = 0;
        
        //Initializing the arrays
        $high = [hightRank];
        $medium = [mediumRank];
        $small = [smallRank];
        $ranks = [numRank];
        

        //puts in the array the numbers of the levels
        do{
            ranks[i] = [i];
            i++;
        }while(i != numRank);
        
        i = 0;
        
        do{
        //puts on the array small the quantity indicated in var smallRank
        small[counter] = ranks[i];
        i++;
        counter++;
        }while(counter != smallRank);
        
        counter = 0;
        
        do{
        //puts on the array medium the quantity indicated in var mediumRank
        medium[counter] = ranks[i];
        i++;
        counter++;
        }while((counter != mediumRank));
        
        counter = 0;
        
        do{
        //puts on the array high the quantity indicated in var hightRank
        high[counter] = ranks[i];
        i++;
        counter++;
        }while(counter != hightRank);
        
        do{
                
            if(indexLevels == small[k]){
                return 1 * indexLevels;
            }
            k++;
        }while(k != smallRank);

        
            k = 0;
        do{
            if((indexLevels > small[k]) && (indexLevels <= medium[k])){
                return 2 * indexLevels;
            }
            k++;
        }while(k != mediumRank)
      
            
            k = 0;
        do{
            if((indexLevels > medium[mediumRank - 1]) && (indexLevels == high[k])){
                return 3 * indexLevels;
                }
                k++;
        }while(k != hightRank);
    
    }
    
    function getPercentage(levels, devideRanks, numRank, currentRank, desiredRank){
        
        $percentage = 0;
        $i = 0;
        $j = 0;
        $counterI = 0;
        $counterJ = 0;
        
        $smallRank = devideRanks[0];
        $mediumRank = devideRanks[1];
        $highRank = devideRanks[2];
        
        do{
            
        if(levels[i] != currentRank){
                i++;
                counterI++;
            }
             else
                if(levels[j] != desiredRank){
                    j++;
                    counterJ++;
                }
            
        $indexLevelsI = levels.indexOf(levels[i]);
        $indexLevelsJ = levels.indexOf(levels[j]);
    
            
        //if the category in with the current level and the desired rank are the same level
        if((levels[i] == currentRank) && (indexLevelsI == counterI) && (levels[j] == desiredRank) && (indexLevelsJ == counterJ)){

            //function that makes the match between the levels and the categories
            var levelsCategories = levelAndCategories(indexLevelsJ, highRank, smallRank, mediumRank, numRank);
            percentage = 7 * levelsCategories;
            }
            else
                //if the category in with the current level and the desired rank are NOT the same level
                if((levels[i] == currentRank) && (indexLevelsI != counterI) && (levels[j] == desiredRank) && (indexLevelsJ != counterJ)){

                    //function that makes the match between the levels and the categories
                    var levelsCategories = levelAndCategories(indexLevelsJ, highRank, smallRank, mediumRank, numRank);
                    percentage = 7 * levelsCategories;
                   }
                  
        }while((levels[i] != currentRank) || (levels[j] != desiredRank));
        
        return percentage;
    }
    
    function calcPrice(desiredRank, currentRank, diference, numRank){
        
        var price = 0;
        var dif = 500;
        var percentage = 0;
        
        //function that given the number of ranks devides it into 3 categories
        var devideRanks = devidRanks(numRank);
        
        //function that gets the levels and no the quantity of levels that are
        var levels = getLevels(currentRank, numRank);
        
        //function that gets the percentage acording to the levels
        var percentage = getPercentage(levels, devideRanks, numRank, currentRank, desiredRank);
        
        do{
            
        if(dif != diference){    
            dif += 500;
        }
            
        //makes the price for the different pages from the website
        if((diference == dif)){
            price = diference * 0.03 + percentage;
           }
            /*else
                //if diference is the same but the levels are harder
                if(){
                    price = diference * 0.03;
                   }
                   else
                        //if diference is very high
                        if(){
                            price = diference * 0.03;
                         }*/
            
        
        
        }while(diference != dif);
            
        return price;
    }
    
    function getPrice(){
        
        var price = 0;
        
        //Gets the actuall rank
        var currentRank = document.getElementById("currentRank").value;
        var desiredRank = document.getElementById("desiredRank").value;
        var numRank = document.getElementById("currentRank").length;
        
        
        //Gets the difference to another variable
        var diference = calcDiference(desiredRank, currentRank);
        
        var currentRank2 = 1000;
        var desiredRank2 = 1000;
            
        
            if(desiredRank == parseInt(currentRank) + diference){
            
                //Only stops the do while cycle when the variables all the variables match with his own pair
                do{
                
                    //Do a if that increments the currentRank2 until it matches the currentRank and after that being done, does the same thing to the desiredRank2 and increments until it matches the desiredRank
                    
                    if(currentRank != currentRank2){
                        currentRank2 += 500;
                     }
                       else
                            if(desiredRank != desiredRank2){
                                desiredRank2 += 500;
                             }
                    
                    if ((currentRank == currentRank2) && (desiredRank == desiredRank2)){
                        
                        //Gets the price
                        price = calcPrice(desiredRank, currentRank, diference, numRank);
            
                    }
                
   
                }while((desiredRank != desiredRank2) || (currentRank != currentRank2));
            }
        
            // ----------ADDITIONAL MARKERS---------//
            /*    
            if(priority == true){
               price += 0.13;
               }

            if(champion == true){
               price += 0.33;
               }

            if(duoLobby == true){
               price += 0.13;
               }

            if(coatching == true){
               price += 0.10;
               }

            if((promo == true) && (promoCode == "boost_gaming")){
               price += 1 * 0.1;
               }*/
            
        console.log(price);
        document.getElementById("price").innerHTML = price.toFixed(2);
    }
?>