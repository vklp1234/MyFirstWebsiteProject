import java.util.Scanner;
class Table
{
	public static void main(String args[])
	{
		Scanner scan=new Scanner(System.in);
		System.out.println(" Enter number : ");
		int table=0;
		int num=scan.nextInt();
		for(int i=1;i<=10;i++)
		{
			table=i*num;
		System.out.println("  "+i+" * "+num+" = "+table);			
		}
		
	}


}