import java.util.ArrayList;
import java.util.List;

public class Main {
    public static void main (String[] args) {
        List<Student> students = List.of(
                new Student("Michell", 21, Gender.FEMALE),
                new Student("Ander", 21, Gender.MALE),
                new Student("Son", 21, Gender.MALE),
                new Student("Michell", 21, Gender.MALE)
        );

        // Imperativa, imprimir solo los hombres
        System.out.println("\n \n Estudiantes Hombres");
        for (Student student : students) {
            if (Gender.MALE.equals(student.getGender())) {
                System.out.println(student);
            }
        }

        System.out.println("\n \n Estudiantes Mujeres");
        List<Student> females = new ArrayList<>();
        for (Student student : students) {
            if (Gender.FEMALE.equals(student.getGender())) {
                females.add(student);
            }
        }
        for (Student student : females) {
            System.out.println(student);
        }

        //-------------------------------------------
        // Imperativa - Convertir lista de estudiantes a personas
        List<Person> personas = new ArrayList<>();
        for (Student student : students) {
            Person persona = new Person(student.getName(), student.getAge());
            personas.add(persona);
        }

        System.out.println("\n \n Programación Imperativa tipo persona");
        for (Person person : personas) {
            System.out.println(person);
        }
    }

    // Clase Person
    static class Person {
        private final String name;
        private final Integer age;

        public Person(String name, Integer age) {
            this.name = name;
            this.age = age;
        }

        @Override
        public String toString() {
            return "Person{" +
                    "name='" + name + '\'' +
                    ", age=" + age +
                    '}';
        }
    }

    // Clase Student
    static class Student {
        private final String name;
        private final Integer age;
        private final Gender gender;

        public Student(String name, Integer age, Gender gender) {
            this.name = name;
            this.age = age;
            this.gender = gender;
        }

        public String getName() {
            return name;
        }

        public Integer getAge() {
            return age;
        }

        public Gender getGender() {
            return gender;
        }

        @Override
        public String toString() {
            return "Student{" +
                    "name='" + name + '\'' +
                    ", age=" + age +
                    ", gender=" + gender +
                    '}';
        }
    }

    // Enum Gender
    enum Gender {
        FEMALE, MALE;
    }
}
