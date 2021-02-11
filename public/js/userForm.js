class UserForm extends React.Component {
    constructor(props) {
        super(props);
        this.state = {firstName: '', lastName: ''};

        this.handleChangeFirstName = this.handleChangeFirstName.bind(this);
        this.handleChangeLastName = this.handleChangeLastName.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    handleChangeFirstName(event) {
        this.setState({firstName: event.target.value});
    }

    handleChangeLastName(event) {
        this.setState({lastName: event.target.value});
    }

    handleSubmit(event) {
        alert("First name: " + this.state.firstName +
            "\nLast name: " + this.state.lastName);
        event.preventDefault();
    }

    render() {
        return (
            <form onSubmit={this.handleSubmit}>
                <label>First name: </label><br />
                <input type="text" name="firstName" value={this.state.firstName}
                    onChange={this.handleChangeFirstName} /><br />

                <label>Last name: </label><br />
                <input type="text" name="lastName" value={this.state.lastName}
                    onChange={this.handleChangeLastName}/><br />

                <input type="submit" name="create" />
            </form>
        );
    }
}

ReactDOM.render (
    <UserForm />,
    document.getElementById('userForm')
);
