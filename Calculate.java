import java.util.Scanner;
class Calculate
{
public static void main(String []args)
{
	Scanner scan=new Scanner(System.in);
	
	int choice;
	do
	{
		System.out.println("#####################################################################");
	    System.out.println("################| Calculater Of Arthemetic Operation |###############");
		System.out.println("#####################################################################");
		System.out.println("\n Enter a number of value of integer type :  ");
	int c=0;
	int a=scan.nextInt();
	System.out.println("\n Enter b number of value of integer type :  ");
	int b=scan.nextInt();
	System.out.println("MAIN MENU : -");

	System.out.println("\n\t Enter [1] to compute Sametion of two Integers :  ");
	System.out.println("\n\t Enter [2] to compute Multiplication of two Integers :  ");
	System.out.println("\n\t Enter [3] to compute Division of two Integers :  ");
	System.out.println("\n\t Enter [4] to compute Substraction of two Integers :  ");
	System.out.println("\n\t Enter [0] to exit :  ");
	System.out.println("\n\t Enter your choice :  ");
	choice=scan.nextInt();
	switch(choice)
	{
		case 1:
		 c=a+b;
		System.out.println("Sametion is : "+c);
		break;
		case 2:
		c=a*b;
		System.out.println("multiplication is : "+c);
		break;
		case 3:
		c=a/b;
		System.out.println("Division is : "+c);
		break;
		case 4:
		c=a-b;
		System.out.println("Substraction is : "+c);
		break;
		case 0:
		break ;
		
		default:
		System.out.println(" Entered choice is invelide thankyou!!!.....");
	}
	System.out.println("continue to main menu .......... ");
	
	}while(choice!=0);

	
}

}