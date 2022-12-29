import { useBriefState } from "../states/BriefState";
import axios from 'axios';
import { useEffect } from "react";
import {
    // BrowserRouter as Router,
    Routes,
    Route,
    Link
} from 'react-router-dom';

export default function Briefs() {
    const briefs = useBriefState();

    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/briefs").then((res) => {
            // console.log(res.data);
            briefs.set(res.data)
        })
    }, [])



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
                                <td>{item.title}</td>
                                {/* <td>{item.description}</td> */}
                                <td>{item.duration} jours</td>
                                <td><a href="">suprimer</a> <a href="">modifier</a> </td>
                            </tr>
                        )
                        )}

                    </tbody>
                </table>
          

        </>
    )

}