// function Name(prop) {
//     return (
//         <div>
//             <input type="text" name="name" id="" value= {prop.name + " " + prop.surname} />
//             <input type="text" name="name" id="" value= {prop.surname} />
//         </div>
//     );
// }

const Name = (prop) =>
    <div>
            <input type="text" name="name" id="" value= {prop.name + " " + prop.middlename + " " + prop.surname} />
        </div>

export default Name;