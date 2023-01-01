import axios from "axios";
import { useParams } from "react-router-dom";
import { useState, useEffect } from "react";
import { Link } from "react-router-dom";

export default function Tasks() {
    const [taskData, setTask] = useState({ task: [] });
    let params = useParams();
    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/briefs/" + params.id).then((response) => {
            // console.log(response);
            // console.log(response.data.task);
            setTask(response.data);
        })
    }, [])

    return (
        <>
            <Link to={"/AddBriefs"}>ajouter un tache</Link>

            <table className="table_brief">
                <thead>
                    <th className="">titre</th>
                    {/* <th>description</th> */}
                    <th className="">durée</th>
                    <th>Actions</th>
                </thead>

                <tbody className="">
                    {taskData.task.map((item) => (
                        <tr>
                            <td>{item.name}</td>
                            {/* <td>{item.description}</td> */}
                            <td>{item.duree} jours</td>
                            <td>
                                <a href="">suprimer</a>
                                <a href="">modifier</a>
                                {/* <Link to={"brief/" + item.id + "/tasks"}>taches</Link> */}
                                {/* <a href=""> assigner</a> */}
                            </td>
                        </tr>
                    )
                    )}

                </tbody>
            </table>


        </>
    )
}