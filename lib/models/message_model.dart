import 'package:chat_ui/models/user_model.dart';

class Message {
  final User sender;
  final String
      time; 
  final String text;
  final bool isLiked;
  final bool unread;

  Message({
    this.sender,
    this.time,
    this.text,
    this.isLiked,
    this.unread,
  });
}


final User currentUser =
    User(id: 0, name: 'Current User', imageUrl: 'assets/images/user1.jpg');


final User user1 = User(id: 1, name: 'user1', imageUrl: 'assets/images/user1.jpg');
final User user2 =
    User(id: 2, name: 'user2', imageUrl: 'assets/images/user2.jpg');
final User user3 = User(id: 3, name: 'user3', imageUrl: 'assets/images/user3.jpg');
final User user4 =
    User(id: 4, name: 'user4', imageUrl: 'assets/images/user4.jpg');
final User user5= User(id: 5, name: 'user5', imageUrl: 'assets/images/user5.jpg');
final User user6 =
    User(id: 6, name: 'user6', imageUrl: 'assets/images/user6.jpg');
final User user7 =
    User(id: 7, name: 'user7', imageUrl: 'assets/images/user7.jpg');

List<User> favorites = [user5, user7, user4, user3, user1];

List<Message> chats = [
  Message(
    sender: user2,
    time: '5:30 PM',
    text: 'Hi',
    isLiked: false,
    unread: true,
  ),
  Message(
    sender: user4,
    time: '4:30 PM',
    text: 'Hey',
    isLiked: false,
    unread: true,
  ),
  Message(
    sender: user3,
    time: '3:30 PM',
    text: 'How\'s it going?',
    isLiked: false,
    unread: false,
  ),
  Message(
    sender: user6,
    time: '2:30 PM',
    text: 'What did you do today?',
    isLiked: false,
    unread: true,
  ),
  Message(
    sender: user7,
    time: '1:30 PM',
    text: 'Nothing much',
    isLiked: false,
    unread: false,
  ),
  Message(
    sender: user5,
    time: '12:30 PM',
    text: 'Quarantine and chill',
    isLiked: false,
    unread: false,
  ),
  Message(
    sender: user1,
    time: '11:30 AM',
    text: 'Sleep, eat, code, repeat',
    isLiked: false,
    unread: false,
  ),
];


List<Message> messages = [
  Message(
    sender: user2,
    time: '5:30 PM',
    text: 'Hey, how\'s it going? What did you do today?',
    isLiked: true,
    unread: true,
  ),
  Message(
    sender: currentUser,
    time: '4:30 PM',
    text: 'Quarantine and Chill. You?',
    isLiked: false,
    unread: true,
  ),
  Message(
    sender: user2,
    time: '3:45 PM',
    text: 'Same. Lotta series!',
    isLiked: false,
    unread: true,
  ),
  Message(
    sender: user2,
    time: '3:15 PM',
    text: 'nice! ',
    isLiked: true,
    unread: true,
  ),
  Message(
    sender: currentUser,
    time: '2:30 PM',
    text: 'Time for my next series!',
    isLiked: false,
    unread: true,
  ),
  Message(
    sender: user2,
    time: '2:00 PM',
    text: 'Catch you later!',
    isLiked: false,
    unread: true,
  ),
];
