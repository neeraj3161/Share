package com.company;

public class pattern {
    public void Pattern(){
        for(int i =1;i<=4;i++){
//            System.out.println("i: "+i);
            for(int j=1;j<=i;j++){
                System.out.print(j);
            }
            System.out.println();
        }
    }

   public int sum(int a,int b){
        int result=a+b;
        return result;
   }


}