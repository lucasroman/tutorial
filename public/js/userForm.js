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
                <label>First name: </label><br />
                <input type="text" name="firstName"/><br />

                <label>Last name: </label><br />
                <input type="text" name="lastName" value={this.state.lastName}
                    onChange={this.handleChangeLastName}/><br />

                <label>Email: </label><br />
                <input type="email" name="email" /><br />

                <input type="submit" name="create" />
            </form>
        );
    }
}

ReactDOM.render (
    <UserForm />,
    document.getElementById('userForm')
);
