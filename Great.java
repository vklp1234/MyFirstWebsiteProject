import java.util.Scanner;
class Great
{
	public static void main(String []args)
	{
		Scanner scan = new Scanner(System.in);
		System.out.println("\n Enter size of array : ");
		int n=scan.nextInt();
		int arr[]=new int [n];
		System.out.println("\n Enter array according to size :  ");
		for(int i=0;i<n;i++)
		arr[i]=scan.nextInt();
		int greatest=0;
		for(int i=0;i<n;i++)
		{
			if(greatest<arr[i])
			greatest=arr[i];
		
		}
		System.out.println("\n greatest number is :"+greatest);
	
	
	}






}