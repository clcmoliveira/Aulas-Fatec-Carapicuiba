public class Main {

    public static void main(String[] args) {
        testeNo();
        testeLista();
    }

    public static void testeNo(){
        No no = new No(2);
        System.out.println(no);
    }

    public static void testeLista(){
        ListaSimples ls = new ListaSimples();
//        System.out.println(ls.getPrim().getInfo());
        for(int i = 1; i <= 5; i++){
            ls.insereInicio(i);
            System.out.println(ls);
        } while(!ls.listaVazia()){
            System.out.println(ls.removeInicio() + "saiu da lista\n");
            System.out.println(ls);
        }

        for(int i = 1; i <= 5; i++){
            ls.insereFim(i);
            System.out.println(ls);
        } while(!ls.listaVazia()){
            System.out.println(ls.removeFim() + "saiu da lista\n");
            System.out.println(ls);
        }
    }
}
