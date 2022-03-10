package com.company;

import java.util.Scanner;

public class Example3 {

    Scanner scanner = new Scanner(System.in);
    public void menuDriven() {
        int input;
        //taking input from user


        int user_input;
        do {
            System.out.println("Choose option from below");
            System.out.println("1. Calculate volume of cylinder");
            System.out.println("2. Factorial of number");
            System.out.println("0. Exit");
//            scanning the user_input
            user_input = scanner.nextInt();

            switch(user_input){
                case 1:
                    System.out.println("Enter the radius: ");
                    double radius= scanner.nextDouble();
                    System.out.println("Enter the height: ");
                    double height= scanner.nextDouble();
                    double volume=3.14*(radius*radius)*height;
                    System.out.println("\n\nVolume of cylinder is "+volume+"\n\n");
                    System.out.println("Press any number to go back");
                    scanner.nextInt();
                    break;
                case 2:
//                    logic for factorial
//                    take input from user
//                    now formula for factorial of 2 is 2*1 for 3 is 3*2*1
//                    for loop 4
//                    int result=0;
//                    input=4
//                    for (int i=1;i<input;i++){
//

//                    }
//                    input=input*i

                    break;
                case 0:
                    System.out.println("Thank you!!");
                    break;
                default:
                    System.out.println("Input check kar le");
                    break;
            }


        }
        //loop will run till the while condition is true
        while (user_input != 0);
    }
}