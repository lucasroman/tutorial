import React from 'react';
import ReactDOM from 'react-dom';

class UserList extends React.Component {
    constructor(props) {
        super(props);
        this.state = { users: JSON.parse(container.dataset.users) };
    }

    render() {
        let usersInDatabase = _.size(this.state.users);

        if (usersInDatabase > 0) {
            return (
                <div>
                    <table className="table table-dark table-responsive-sm">
                        <tr>
                            <th scope="col">Last Name</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Email</th>
                        </tr>

                        <UserData users={users} />
                    </table>
                </div>

            );
        } else {
            return(
                <div>There are no users.</div>
            );
        }
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
