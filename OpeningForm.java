import java.awt.event.*;
public class OpeningForm {
    public static void main(String[] args) {
        SwingUtilities.invokeLater(new Runnable() {
             
            @Override
            public void run() {
                BasicForm frame = new BasicForm("Basic Frame");
                InputForm inputForm = new InputForm();
                frame.createGUI();
            }
        });
    }
 
}
 
class BasicForm extends JFrame {
    public BasicForm(String name) {
        setTitle(name);
        BasicPanel panel = new BasicPanel();
        add(panel);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setSize(300,300);
         
    }
    public void createGUI() {
        setVisible(true);
    }
}
 
class InputForm extends JFrame {
    public InputForm() {
        InputPanel panel = new InputPanel();
        add(panel);
        setSize(200,200);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setVisible(false);
    }
}
 
class BasicPanel extends JPanel {
    public BasicPanel() {
        JButton button = new JButton("New...");
        button.addActionListener(new ActionListener() {
             
            public void actionPerformed(ActionEvent arg0) {
                InputForm inputForm = new InputForm();
                inputForm.setVisible(true);
            }
        });
        add(button);
    }
}
 
class InputPanel extends JPanel implements MouseListener {
    JTextField firstNameField;
     JTextField secondNameField;
     JTextField phoneNumber;
 
    public InputPanel() {
         firstNameField = new JTextField(20);
         secondNameField = new JTextField(20);
         phoneNumber = new JTextField(15);
          
         JButton saveToFileButton = new JButton("Save to file");
          
         saveToFileButton.addMouseListener(this);
          
         add(firstNameField);
         add(secondNameField);
         add(phoneNumber);
         add(saveToFileButton);
    }
     
                @Override
                public void mouseClicked(MouseEvent arg0) {
                    BufferedWriter writer;
                    try {
                        File file = new File("contacts.txt");
                        writer = new BufferedWriter(new FileWriter(file));
                        writer.write(firstNameField.getText() + "\t" + secondNameField + "\t" + phoneNumber);
                    } catch(FileNotFoundException e) {
                        e.printStackTrace();
                    } catch (IOException e) {
                        e.printStackTrace();
                    }
                }
                @Override
                public void mouseEntered(MouseEvent arg0) {
                    // TODO Auto-generated method stub
                     
                }
                @Override
                public void mouseExited(MouseEvent arg0) {
                    // TODO Auto-generated method stub
                     
                }
                @Override
                public void mousePressed(MouseEvent arg0) {
                    // TODO Auto-generated method stub
                     
                }
                @Override
                public void mouseReleased(MouseEvent arg0) {
                    // TODO Auto-generated method stub
                     
                }
          
}