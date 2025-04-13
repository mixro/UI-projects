
import java.util.Scanner;

class Human {
    String kingdomName;
    String age;
    String voice;



    void enterInfo(Scanner scanner) {
        System.out.print("Enter Kingdom Name: ");
        kingdomName = scanner.nextLine();
        System.out.print("Enter age: ");
        age = scanner.nextLine();
        System.out.print("Enter voice: ");
        voice = scanner.nextLine();
    }

    void displayInfo(String gender) {
        System.out.println("\n" + gender + " Information:");
        System.out.println("Kingdom Name: " + kingdomName);
        System.out.println("age: " + age);
        System.out.println("voice: " + voice);
    }
}

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        Human human = new Human();

        System.out.println("Choose option:");
        System.out.println("1. Female");
        System.out.println("2. Male");
        System.out.print("Enter your choice: ");
        int choice = scanner.nextInt();
        scanner.nextLine(); // Clear newline

        switch (choice) {
            case 1:
                System.out.println("You chose Female.");
                human.enterInfo(scanner);
                human.displayInfo("Female");
                break;
            case 2:
                System.out.println("You chose Male.");
                human.enterInfo(scanner);
                human.displayInfo("Male");
                break;
            default:
                System.out.println("Invalid choice.");
                break;
        }

        scanner.close();
    }
}

