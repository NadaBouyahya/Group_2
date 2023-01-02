import { useBriefState } from "../states/BriefState";
import axios from 'axios';
import { useEffect } from "react";
import {
    // BrowserRouter as Router,
    Routes,
    Route,
    Link,
    useParams
} from 'react-router-dom';
import { useState } from "react";

export default function Briefs() {
    const briefs = useBriefState();

    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/briefs").then((res) => {
            console.log(res.data);
            briefs.set(res.data)
        })
    }, [])

    const deletBrief = (e) => {
        let id_brief = e.target.getAttribute('id-brief')

        axios.delete('http://127.0.0.1:8000/api/briefs/' + id_brief)
    }




return (
    <>
        <Link to={"/AddBriefs"}>ajouter un brief</Link>

        <table className="table_brief">
            <thead>
                <th className="">titre</th>
                {/* <th>description</th> */}
                <th className="">durée</th>
                <th>Actions</th>
            </thead>

            <tbody className="">
                {briefs.get().map((item) => (
                    <tr>
                        <td>{item.name}</td>
                        {/* <td>{item.description}</td> */}
                        <td>{item.duree} jours</td>
                        <td>
                            {/* <a href="">suprimer</a> */}
                            <input type="submit" value="suprimer" id-brief={item.id} onClick={deletBrief} />
                            <Link to={"EditBrief/" + item.id}>modifier</Link>
                            <Link to={"brief/" + item.id + "/tasks"}>taches</Link>
                            <a href=""> assigner</a>
                        </td>
                    </tr>
                )
                )}

            </tbody>
        </table>


    </>
)

}