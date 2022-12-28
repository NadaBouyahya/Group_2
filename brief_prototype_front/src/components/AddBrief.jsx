import { useBriefState } from "../states/BriefState";

export default function AddBrief() {

    const briefs = useBriefState();
    return (
        <>
            <form action=""
                onSubmit={(e) => {
                    e.preventDefault();
                    briefs.add(e.target["brief"].value);
                    e.target["brief"].value = "";
                }}
            >
                <input type="text" name="brief" />
                <input type="submit" />
            </form>

        </>
    )
}