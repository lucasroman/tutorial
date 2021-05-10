import React from 'react';
import ReactDOM from 'react-dom';

class UserForm extends React.Component {
    constructor(props) {
        super(props);
        this.state = {lastName: ''};

        // this.handleChangeFirstName = this.handleChangeFirstName.bind(this);
        this.handleChangeLastName = this.handleChangeLastName.bind(this);
    }

    // handleChangeFirstName(event) {
    //     this.setState({firstName: event.target.value});
    // }

    handleChangeLastName(event) {
        this.setState({lastName: event.target.value});
    }

    render() {
        return (
            <form action="/users" method="post">
                <div class="row mb-3">
                    <div class="form-group col">
                        <label for="firstName" class="form-label">
                            First name
                        </label>
                        <input type="text" class="form-control" name="firstName"
                            id="firstName"/>
                    </div>

                    <div class="form-group col">
                        <label for="lastName" class="form-label">
                            Last name
                        </label>
                        <input type="text" class="form-control" name="lastName"
                            value={this.state.lastName}
                            onChange={this.handleChangeLastName} id="lastName"/>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email"
                        id="email"/>
                </div>

                <input type="submit" value="Create User" class="btn btn-primary
                    mb-3" />
            </form>
        );
    }
}

if (document.getElementById('userForm')) {
    ReactDOM.render(<UserForm />, document.getElementById('userForm'));
}
