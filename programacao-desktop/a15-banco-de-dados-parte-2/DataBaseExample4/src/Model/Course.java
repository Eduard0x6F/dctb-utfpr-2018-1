/*
* Créditos: https://github.com/ucuptimposu/mvc-dao-simple-java-swing
**/

package Model;

public class Course{
    
    private int id;
    private String name;
    
    // É nesta classe que as operações com os dados devem ser realizadas;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }
}