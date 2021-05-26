import React from 'react';
import ReactDOM from 'react-dom';

class UserList extends React.Component {
    constructor(props) {
        super(props);
        this.state = { users: JSON.parse(container.dataset.users) };
    }

    render() {
        return (
            <div>
                <h3>Here users table</h3>

                <table className="table">
                    <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Email</th>
                    </tr>

                    <UserData users={users} />
                </table>
            </div>

        );
    }
}

class UserData extends React.Component {
    constructor(props) {
        super(props);
        this.state = { users: JSON.parse(container.dataset.users) };
    }
    render() {
        return (
            <>
            {this.state.users.map(user => (
                <tr>
                    <td key={Date.now()}>{user.last_name}</td>
                    <td key={Date.now()}>{user.first_name}</td>
                    <td key={Date.now()}>{user.email}</td>
                </tr>
            ))}
            </>
        );
    }
}

var container = document.getElementById('userList');
var users = container.dataset.users;

if (container) {
    ReactDOM.render(
        <UserList users={users} />,
        container
    );
}
