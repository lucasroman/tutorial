import React from 'react';
import ReactDOM from 'react-dom';

class UserList extends React.Component {
    constructor(props) {
        super(props);
        this.state = { users: JSON.parse(container.dataset.users) };
    }

    render() {
        // Get amount of users in database
        let usersInDatabase = _.size(this.state.users);

        if (usersInDatabase > 0) {
            return (
                <div>
                    <table className="table table-dark table-responsive-sm">
                        <caption>List of users in a React component</caption>
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
                <div class="text-center">
                    <h3>There are no users.</h3>
                    <a href="/" class="btn btn-primary m-2">
                        Back Home
                    </a>
                    <a href="/users/create" class="btn btn-primary">
                        Create User
                    </a>
                </div>
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
