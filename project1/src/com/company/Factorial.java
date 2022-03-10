package com.company;

public class Factorial {
    public void factorial(int input){
        int value=input;
        for(int i=1;i<input;i++){
            value=value*i;
        }
        System.out.println("Factorial of given input "+input+" is "+value);
    }
}